<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Facade\FlareClient\Http\Client;
use PhpParser\Node\Expr\New_;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('clientes.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $clientes = New Cliente();
            $clientes->nome = $request->nome;
            $clientes->idade = $request->idade;
            $clientes->rg = $request->rg;
            $clientes->email = $request->email;
            $clientes->save();
            $msg = "Salvo com sucesso!";
        } catch (\Throwable $th) {
            $msg = $th;
        }
        
        return redirect()->back()->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $clientes = Cliente::find($id);
        return view('clientes.show', compact('clientes'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $clientes = Cliente::find($id);
       $clientes->update();
       return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $clientes = Cliente::find($id);
            $clientes->id = $request->id;
            $clientes->nome = $request->nome;
            $clientes->idade = $request->idade;
            $clientes->rg = $request->rg;
            $clientes->email = $request->email;
            $clientes->update();
            $msg = "Salvo com sucesso!";
        } catch (\Throwable $th) {
            $msg = $th;
        }
        
        return redirect()->back()->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Cliente::find($id)->delete();
        $msg = "Cadastro deletado!";
        return redirect()->back()->with('msg', $msg);
    }

    public function buscaCliente(Request $request){
        $clienteEncontrado = Cliente::where('nome','like','%'.$request->nome.'%')->first();

        if (!$clienteEncontrado) {
            return redirect()->back()->with('msg', 'Cliente não encontrado');
        }
        return redirect()->route('clientes.show', $clienteEncontrado->id);
    }

}
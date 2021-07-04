<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        // return dd('Olá');
        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $empresas = Empresa::all();
       return view('empresas.create', compact('empresas'));
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
      $empresas = New Empresa();
      $empresas->nome = $request->nome;
      $empresas->email = $request->email;
      $empresas->endereco = $request->endereco;
      $empresas->referencia = $request->referencia;
      $empresas->telefone = $request->telefone;
      $empresas->save();
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
        $empresas = Empresa::find($id);
        return view('empresas.show', compact('empresas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresas = Empresa::find($id);
        $empresas->update();
        return view('empresas.edit', compact('empresas'));

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
        try{
            $empresas = Empresa::find($id);
            $empresas->id = $request->id;
            $empresas->nome = $request->nome;
            $empresas->email = $request->email;
            $empresas->endereco = $request->endereco;
            $empresas->referencia = $request->referencia;
            $empresas->telefone = $request->telefone;
            $empresas->update();
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
        $empresas = Empresa::find($id)->delete();
        $msg = "Empresa excluída com sucesso!";
        return redirect()->back()->with('msg', $msg);
        //
    }
}

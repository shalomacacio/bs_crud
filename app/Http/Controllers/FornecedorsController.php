<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use PHPUnit\Util\Xml\ValidationResult;

class FornecedorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedors = Fornecedor::all();
        return view('fornecedors.index', compact('fornecedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedors = Fornecedor::all();
        return view('fornecedors.create', compact('fornecedors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
            'nome' => 'required|max:5', 
            
            ],
            $messages=
            [
                'required' => 'O campo :attribute é obrigatorio!',
                'max' => 'O campo :attribute exige no máximo 5 caracteres!'
            ]
        );
        try {
            $fornecedors = New Fornecedor;
            $fornecedors->nome = $request->nome;
            $fornecedors->endereco = $request->endereco;
            $fornecedors->telefone = $request->telefone;
            $fornecedors->save();
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
        $fornecedors = Fornecedor::find($id);
        return view('fornecedors.show', compact('fornecedors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $fornecedors = Fornecedor::find($id);
        $fornecedors->update();
        return view('fornecedors.edit', compact('fornecedors'));
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
        $validatedData = $request->validate(
            [
            'nome' => 'required|max:5|',
            'telefone' => 'numeric', 
            ],
            $messages=[
                'required' => 'O campo :attribute é obrigatorio!',
                'max' => 'O campo :attribute exige no máximo 5 caracteres!',
                'numeric' => 'O campo :attribute só aceita números!'
            ]
        );

        try {
        $fornecedors = Fornecedor::find($id);
        $fornecedors->nome = $request->nome;
        $fornecedors->endereco = $request->endereco;
        $fornecedors->telefone = $request->telefone;
        $fornecedors->update();
        $msg = "Salvo com sucesso!";        
        
    } catch (\Throwable $th) {
            $msg = $th;
        }
        
    return redirect()->route('fornecedors.create')->with('msg', $msg);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedors = Fornecedor::find($id)->delete();
        $msg = "Excluído com sucesso!";
        return redirect()->back()->with('msg', $msg);
    }
}

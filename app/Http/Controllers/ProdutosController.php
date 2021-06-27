<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto; 

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('produtos.create');
        
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
            $produtos = new Produto(); //criando novo objeto do tipo categoria, instanciando objeto do tipo categoria ("vazio").
            $produtos->nome = $request->nome;
            $produtos->valor = $request->valor;
            $produtos->categoria_id = $request->categoria_id;
            $produtos->save();
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
        echo "chama o método 'show'";
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        echo "chama o método 'edit'";
        //
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
        
        echo "chama o método 'update'";
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        echo "chama o método 'destroy'";
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Categoria;
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
        $produtos = Produto::all();
        $categorias = Categoria::all();
        
        return view('produtos.create', compact('produtos', 'categorias'));


        
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
        $produtos = Produto::find($id);
        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $produtos = Produto::find($id);
        $categorias = Categoria::all();
        $produtos->update();
        return view('produtos.edit', compact('produtos', 'categorias'));
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
        try {
            $produtos = Produto::find($id);
            $produtos->nome = $request->nome;
            $produtos->valor = $request->valor;
            $produtos->categoria_id = $request->categoria_id;
            $produtos->update();
            $msg = "Salvo com sucesso!";
        } catch (\Throwable $th) {
            $msg = $th;
            //throw $th;
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
        $produtos = Produto::find($id)->delete();
        $msg = "Excluído com sucesso!";
        return redirect()->back()->with('msg', $msg);
    }
}

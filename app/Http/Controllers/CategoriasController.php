<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use PhpParser\Node\Stmt\TryCatch;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
        // return redirect('categorias/create');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //chama a página do form
    {

        $categorias = Categoria::all();
        return view('categorias.create', compact('categorias'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $categoria = New Categoria(); //criando novo objeto do tipo categoria, instanciando objeto do tipo categoria ("vazio").
        // $categoria->nome = $request->nome;
        // $categoria->save();
        try {
            $categoria = New Categoria(); //criando novo objeto do tipo categoria, instanciando objeto do tipo categoria ("vazio").
            $categoria->nome = $request->nome;
            $categoria->save(); 
            $msg = "Salvo com sucesso!";
            
            //code...
        } catch (\Throwable $th) {
            $msg = $th;
        
            //throw $th;
        }
        // return view('categorias.create', compact('msg'));
        return redirect()->back()->with('msg', $msg);
        
    
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.show', compact('categoria'));

        
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
        $categoria = Categoria::find($id);
        $retorno = $categoria->update();
        return view('categorias.edit', compact('categoria'));
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
        $categoria = Categoria::find($id);
        $categoria->id = $request->id;
        $categoria->nome = $request->nome;
        // return dd($categoria->nome); //
        $categoria->update();

        try {
            $categoria = New Categoria();
            $categoria->nome = $request->nome;
            $categoria->update(); 
            $msg = "Salvo com sucesso!";

        } catch (\Throwable $th) {
            $msg = $th;
        
        }
        $categorias = Categoria::all();
        return redirect()->route('categorias.index')->with('msg', $msg);
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id)->delete();
        $msg = "Categoria excluída com sucesso!";
        return redirect()->back()->with('msg', $msg);
        

    }
}

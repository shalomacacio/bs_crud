@extends('layouts.template')
@section('content')

@if (session('msg'))
  <div class="alert alert-success">
      {{ session('msg') }}
  </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="py-2">
    <h5>Cadastro de Produtos</h5>
</div>

<form action="{{ route('produtos.store') }}" method="post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label><b>Nome</b></label>
        <input type="text" class="form-control" name="nome" >
      </div>
      <p>
      <div class="form-group col-md-6">
        <label><b>Valor</b></label>
        <input type="text" class="form-control" name="valor">
      </div>
    </div>
    <p>
    <div class="form-group col-md-6">
      <label><b>Categoria (número)</b></label>
      {{-- <input type="text" class="form-control" name="categoria_id" >  --}}
      
      <select class="form-control" name="categoria_id">
         @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>  

         @endforeach

      </select>

    </div>
    <p>
    <div class="py-2">
        <button type="submit" class="btn btn-primary ">Salvar</button>
    </div> 
</form>


  <hr>

  <table class="table">
    <thead>
    <tr>
        <th scope="col" colspan="8"><center>Lista de produtos</center></th>
    </tr>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">VALOR</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col" colspan="3">AÇÕES</th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $produtos as $produto )
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->valor }}</td>
            <td>{{ $produto->categoria->nome }}</td>
            <td><a href="{{route('produtos.show', $produto->id)}}">Mostrar</a></td>
            <td><a href="{{route('produtos.edit', $produto->id)}}">Editar</a></td>
            <td><a href="{{route('produtos.destroy', $produto->id)}}">Excluir</a></td>
        </tr>
    @endforeach
    </tbody>
  </table>

 @endsection





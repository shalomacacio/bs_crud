@extends('layouts.template')
@section('content')

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
    <h5>Cadastro de Clientes</h5>
</div>

<form action="{{ route('clientes.store') }}" method="post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label><b>Nome</b></label>
        <input type="text" class="form-control" name="nome" >
      </div>
      <p>
      <div class="form-group col-md-6">
        <label><b>Idade</b></label>
        <input type="text" class="form-control" name="idade">
      </div>
    </div>
    <p>
    <div class="form-group col-md-6">
      <label><b>RG</b></label>
      <input type="text" class="form-control" name="rg" >
    </div>
    <p>
    <div class="form-group col-md-6">
      <label><b>Email</b></label>
      <input type="text" class="form-control" name="email">
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
        <th scope="col" colspan="8"><center>Lista de Clientes</center></th>
    </tr>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">IDADE</th>
        <th scope="col">RG</th>
        <th scope="col">EMAIL</th>
        <th scope="col" colspan="3"><center>AÇÕES</center></th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $clientes as $cliente )
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->idade }}</td>
            <td>{{ $cliente->rg }}</td>
            <td>{{ $cliente->email }}</td>
            <td><a href="{{route('clientes.show', $cliente->id)}}">Mostrar</a></td>
            <td><a href="{{route('clientes.edit', $cliente->id)}}">Editar</a></td>
            <td><a href="{{route('clientes.destroy', $cliente->id)}}">Excluir</a></td>
        </tr>
    @endforeach
    </tbody>
  </table>

@endsection



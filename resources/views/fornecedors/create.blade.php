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
    <h5>Cadastro de Fornecedores</h5>
</div>

<form action="{{ route('fornecedors.store') }}" method="post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label><b>Nome</b></label>
        <input type="text" class="form-control" name="nome" >
      </div>
      <p>
      <div class="form-group col-md-6">
        <label><b>Endereço</b></label>
        <input type="text" class="form-control" name="endereco">
      </div>
    </div>
    <p>
    <div class="form-group col-md-6">
      <label><b>Telefone</b></label>
      <input type="text" class="form-control" name="telefone" >
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
        <th scope="col" colspan="8"><center>Lista de fornecedores</center></th>
    </tr>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">ENDEREÇO</th>
        <th scope="col">TELEFONE</th>
        <th scope="col" colspan="3">AÇÕES</th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $fornecedors as $fornecedor )
        <tr>
            <td>{{ $fornecedor->id }}</td>
            <td>{{ $fornecedor->nome }}</td>
            <td>{{ $fornecedor->endereco }}</td>
            <td>{{ $fornecedor->telefone }}</td>
            <td><a href="{{route('fornecedors.show', $fornecedor->id)}}">Mostrar</a></td>
            <td><a href="{{route('fornecedors.edit', $fornecedor->id)}}">Editar</a></td>
            <td><a href="{{route('fornecedors.destroy', $fornecedor->id)}}">Excluir</a></td>
        </tr>
    @endforeach
    </tbody>
  </table>
  
  @if (session('msg'))
  <div class="alert alert-success">
      {{ session('msg') }}
  </div>
@endif

@endsection



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
    <h5>Cadastro de Empresas</h5>
</div>

<form action="{{ route('empresas.store') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label><b>Nome</b></label>
            <input type="text" class="form-control" name="nome">
        </div>
        <p>
    <div class="form-group col-md-6">
            <label><b>E-mail</b></label>
            <input type="text" class="form-control" name="email">
        </div>
        <p>
    <div class="form-group col-md-6">
        <label><b>Endereço</b></label>
        <input type="text" class="form-control" name="endereco">
    </div>
        <p>
    <div class="form-group col-md-6">
        <label><b>Referência</b></label>
        <input type="text" class="form-control" name="referencia">
    </div>
        <p>
    <div class="form-group col-md-6">
        <label><b>Telefone</b></label>
        <input type="text" class="form-control" name="telefone">
    </div>
        <p>
    <div class="py-2">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

<hr>

<table class="table">
    <thead>
        <tr>
            <th scope="col" colspan="8"><center>Lista de Empresas</center></th>
        </tr>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Endereço</th>
            <th scope="col">Referência</th>
            <th scope="col">Telefone</th>
            <th scope="col" colspan="3"><center>Ações</center></th>
        </tr>
    </thead>
    @foreach ($empresas as $empresa)
        <tr>
            <td>{{ $empresa->nome }}</td>
            <td>{{ $empresa->email }}</td>
            <td>{{ $empresa->endereco }}</td>
            <td>{{ $empresa->referencia }}</td>
            <td>{{ $empresa->telefone }}</td>
            <td><a href="{{route('empresas.show', $empresa->id)}}">Mostrar</a></td>
            <td><a href="{{route('empresas.edit', $empresa->id)}}">Editar</a></td>
            <td><a href="{{route('empresas.destroy', $empresa->id)}}">Excluir</a></td>
        </tr>
    @endforeach
</table>
<p>

    @if (session('msg'))
        {{ session('msg') }}
    @endif

@endsection

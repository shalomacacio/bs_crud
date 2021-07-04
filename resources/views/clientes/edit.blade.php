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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h5>Editar cadastro</h5>
<p>
    
<form action="{{ route('clientes.update', $clientes->id) }}" method="post">

@csrf

@method('put')
        <div class="form-row">
            <div class="form-group col-md-6">
    <input hidden type="id" class="form-control" id="id" value="{{ $clientes->id }}">
            </div>
    <p>
            <div class="form-group col-md-6">
    <label><b>Nome</b></label><br><input type="text" class="form-control" name="nome" value="{{ $clientes->nome }}">
            </div>
    <p>
            <div class="form-group col-md-6">
    <label><b>Idade</b></label><br><input type="text" class="form-control" name="idade" value="{{ $clientes->idade }}">
            </div>
    <p>
            <div class="form-group col-md-6">
    <label><b>RG</b></label><br><input type="text" class="form-control" name="rg" value="{{ $clientes->rg }}">
            </div>
    <p>
            <div class="form-group col-md-6">
    <label><b>E-mail</b></label><br><input type="text" class="form-control" name="email" value="{{ $clientes->email }}">
            </div>
    <p>
            <div class="py-2">
    <button type="submit" class="btn btn-primary">Editar</button> 
    {{-- <button type="button" value="back" onclick="history.go(-1);">Voltar</a></button> --}}
</form>
<p>

@if (session('msg'))
    
{{ session('msg') }}
@endif

@endsection
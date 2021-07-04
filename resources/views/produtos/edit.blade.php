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
    
<form action="{{ route('produtos.update', $produtos->id) }}" method="post">

@csrf

@method('put')
        <div class="form-row">
            <div class="form-group col-md-6">
    <input hidden type="id" class="form-control" id="id" value="{{ $produtos->id }}">
            </div>
    <p>
            <div class="form-group col-md-6">
    <label><b>Nome</b></label><br><input type="text" class="form-control" name="nome" value="{{ $produtos->nome }}">
            </div>
    <p>
            <div class="form-group col-md-6">
    <label><b>Valor</b></label><br><input type="text" class="form-control" name="valor" value="{{ $produtos->valor }}">
            </div>
    <p>
        <div class="form-group col-md-6">
    <label><b>Categoria</b></label>
    <br>
    <select class="form-control" name="categoria_id">
        @foreach ($categorias as $categoria)
           
        <option @if ($categoria->id == $produtos->categoria_id) selected @endif value="{{$categoria->id}}">{{$categoria->nome}}</option>  

        @endforeach

     </select>
</div>
    <p>
            <div class="py-2">
    <button type="submit" class="btn btn-primary">Editar</button>
            </div> 
    {{-- <button type="button" value="back" onclick="history.go(-1);">Voltar</a></button> --}}
</form>
<p>

    
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif

@endsection
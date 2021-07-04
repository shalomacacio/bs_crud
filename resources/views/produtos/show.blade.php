@extends('layouts.template')

@section('content')

<div class="py-2">
    <h5>Produto</h5>
</div>

<hr>

<div class="form-row">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">VALOR</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $produtos->nome }}</td>
            <td>{{ $produtos->valor }}</td>
            <td>{{ $produtos->categoria }}</td>
            <td><a href="{{route('produtos.edit', $produtos->id)}}">Editar</a></td>
        </tr>
    </tbody>
    </table>
</html>

@endsection
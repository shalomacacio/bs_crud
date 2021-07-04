@extends('layouts.template')

@section('content')

<div class="py-2">
    <h5>Fornecedor</h5>
</div>

<hr>

<div class="form-row">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $fornecedors->nome }}</td>
            <td>{{ $fornecedors->endereco }}</td>
            <td>{{ $fornecedors->telefone }}</td>
            <td><a href="{{route('fornecedors.edit', $fornecedors->id)}}">Editar</a></td>
        </tr>
    </tbody>
    </table>
</html>

@endsection
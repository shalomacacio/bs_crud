@extends('layouts.template')

@section('content')

<div class="py-2">
    <h5>Empresa</h5>
</div>

<hr>

<div class="form-row">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">REFERENCIA</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $empresas->nome }}</td>
            <td>{{ $empresas->email }}</td> 
            <td>{{ $empresas->endereco }}</td>
            <td>{{ $empresas->referencia }}</td>
            <td>{{ $empresas->telefone }}</td>
            <td><a href="{{route('empresas.edit', $empresas->id)}}">Editar</a></td>
        </tr>
    </tbody>
    </table>
</html>

@endsection
@extends('layouts.template')

@section('content')

<div class="py-2">
    <h5>Cliente</h5>
</div>

<hr>

<div class="form-row">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">IDADE</th>
            <th scope="col">RG</th>
            <th scope="col">EMAIL</th>
            <th scope="col">AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $clientes->nome }}</td>
            <td>{{ $clientes->idade }}</td> 
            <td>{{ $clientes->rg }}</td>
            <td>{{ $clientes->email }}</td>
            <td><a href="{{route('clientes.edit', $clientes->id)}}">Editar</a></td>
        </tr>
    </tbody>
    </table>
</html>

@endsection


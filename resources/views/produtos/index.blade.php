<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div>
        <h3>Tela de produtos cadastrados</h3>
    </div>
    <p>
    <div>
        @if (session('msg'))
            {{ session('msg') }}
        @endif
    </div>
    <p>
    <table>
        {{-- <tr>
            <td>Nome</td>
            <td>Ações</td>
        </tr>
        @foreach ($produtos as $produtos)
            <tr>
                <td>{{ $categoria->nome }}</td>
                {{-- <td><a href="{{ route('produtos.show', $categoria->id) }}">Mostrar</a></td>
                <td><a href="{{ route('produtos.edit', $categoria->id) }}">Editar</a></td>
                <td><a href="{{ route('produtos.destroy', $categoria->id) }}"> Excluir</a></td> --}}
            {{-- </tr>
        @endforeach

    {{-- </table> --}}
    
        <a href="{{ route('produtos.create') }}" type=button>Cadastrar</a>

    
</body>

</html>
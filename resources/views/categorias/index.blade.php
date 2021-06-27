{{-- @if (session('msg'))

{{session('msg')}}
    
@endif

<form action="{{route('categorias.store')}}" method="post">
    
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome">
    <button type="submit"> Adicionar </button>

</form> --}}


{{-- @foreach ($categorias as $cat)
{{$cat->nome}}
@endforeach --}}

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
        <h2>Informações gerais de categorias</h2>
    </div>
    <p>
        <div class="button">
            <a href="{{ route('categorias.create') }}" type=button>Cadastrar categoria</a>
        </div>
    <p>
    <table>
        <tr>
            <td>Nome</td>
            <td>Ações</td>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nome }}</td>
                <td><a href="{{ route('categorias.show', $categoria->id) }}">Mostrar</a></td>
                <td><a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a></td>
                <td><a href="{{ route('categorias.destroy', $categoria->id) }}" onclick="return confirm('Tem Certeza?')"> Excluir</a></td>
            </tr>
        @endforeach

        </table>
        <p>
        <div>
            @if (session('msg'))
                {{ session('msg') }}
            @endif
        </div>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/categorias.index" method="post">
        <div>
            <label for="nome">Bem-vindo(a) as lojas TecToy</label>
        </div>
        <p>
        <div class="button">
            <a href="{{route('categorias.create')}}">
            <button type="subimit">Cadastrar!</button></a>
        </div>
    </form>
</body>
</html> --}}

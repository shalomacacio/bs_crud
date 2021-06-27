<form action="{{ route('categorias.store') }}" method="post">

    @csrf
    
    <h4><label>Tela de cadastro de categorias</label></h4>
        <label><b>Nome:<b></label><br><input type="text" name="nome">
    <p>
        <button type="submit">Adicionar</button> <button type="button" value="back" onclick="history.go(-1);">Voltar</a></button>

</form>
<table>
    <tr>
        <td>Nome</td>
    </tr>
    @foreach ($categorias as $categoria)
        <tr>
            <td>{{ $categoria->nome }}</td>
        </tr>
    @endforeach
    </table>
    <p>
        @if (session('msg'))
        {{ session('msg') }}
    @endif
    </p>



{{-- <a href="{{ route('categorias.index') }}"> --}}

{{-- @isset($msg)

{{ $msg }}     

@endisset --}}

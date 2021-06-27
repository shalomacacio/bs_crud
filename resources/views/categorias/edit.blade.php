<h2>Editar produto</h2>

@if (session('msg'))

    {{ session('msg') }}

@endif

<form action="{{ route('categorias.update', $categoria->id) }}" method="post">
    
    @csrf
    
    @method('put')
    
    <p>
        <input hidden type="id" id="id" value="{{ $categoria->id }}">
        <label><b>Nome</b></label><br><input type="text" name="nome" value="{{ $categoria->nome }}">
    <p>
    
        <button type="submit">Editar</button> <button type="button" value="back"
            onclick="history.go(-1);">Voltar</a></button>
</form>
{{-- @if (session('msg'))

    {{ session('msg') }}

@endif

<form action="{{ route('categorias.update') }}" method="post">
    @method('put')
    @csrf
    <h4><label>Tela de cadastro de categorias</label></h4>
    <a href="{{ route('categorias.index') }}" type=button> Voltar</a>
            <p>
                <label>Nome: </label><input type="text" name="nome" value="{{ $categoria->nome }}">
            <p>
            <button type="submit">Editar</button>


</form> --}}

{{-- @isset($msg)

{{ $msg }}     

@endisset --}}

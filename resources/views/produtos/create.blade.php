<form action="{{ route('produtos.store') }}" method="post">

    @csrf
    <h4><label>Tela de cadastro de produtos</label></h4>
    <p>
        @if (session('msg'))

            {{ session('msg') }}

        @endif
    <p>
        <label>Nome</label><br><input type="text" name="nome">
    <p>
        <label>Valor</label><br><input type="text" name="valor">
    <p>
        <label>Categoria</label><br><input type="text" name="categoria_id">
    <p>
        <button type="submit"> Adicionar </button>

</form>

{{-- <a href="{{ route('produtos.index') }}" type=button>
        < Voltar</a> --}}

{{-- @csrf
    <label>Nome:</label>
    <input type="text" name="nome">
    <label>Valor:</label>
    <input type="decimal" name="valor">
    <label>Categoria:</label>
    <input type="integer" name="categoria_id">
    <p><button type="submit"> Adicionar </button>

</form> --}}

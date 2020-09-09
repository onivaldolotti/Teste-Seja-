@extends ('index')

@section('cabecalho')
    Cadastro de Produtos
@endsection

@section('conteudo')

@include('mensagem')
<form method="POST" action="{{ route('cadastrar_produto') }}" id="formularioProduto">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="preco">Preço</label>
        <input type="text" class="form-control" id="preco" name="preco" required onkeypress="return somenteNumeros(event)">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script>
    function somenteNumeros(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }
</script>

@endsection
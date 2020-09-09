@extends ('index')

@section('cabecalho')
    Cadastro de Vendedores
@endsection

@section('conteudo')

@include('mensagem')

    <form method='POST' action="{{ route('cadastrar_vendedor') }}" id="formularioVendedor">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection

    
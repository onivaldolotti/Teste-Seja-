@extends ('index')

@section('cabecalho')
    Envio do Relatório de Vendas
@endsection

@section('conteudo')

@include('mensagem')

    <form action="{{ route('enviar_email') }}" id="formularioEmail">
        <div class="form-group">
            <label>Digite seu E-mail</label>
            <input type="email" name="email" class="form-control" required/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection



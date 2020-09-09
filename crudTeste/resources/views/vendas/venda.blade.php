@extends ('index')

@section('cabecalho')
    Cadastro de Vendas
@endsection

@section('conteudo')

@include('mensagem')

    <form method="POST" action="{{ route('cadastrar_vendas') }}">
        @csrf
        <div class="form-group">
            <label for="vendedor">Vendedor</label><br>
            <select class="form-control" id="vendedorId"  name="vendedorId" >
                @foreach($vendedores as $vendedor)
                    <option value="{{$vendedor->id}}"> {{$vendedor->nome}}</option>                    
                @endforeach
            </select>
        </div>
        <div class="form-group" >
            <label for="produto">Produto</label><br>
            <select  class="form-control" id="produtoId" name="produtoId" >
                @foreach($produtos as $produto)
                    <option value="{{$produto->id}}" > {{$produto->nome}}</option>
                @endforeach
            </select>    
        </div>
        <div class="form-group" >
            <label for="valorVenda">Valor</label><br>
            <select class="form-control" id="valorVenda" name="valorVenda" disabled="disabled">
                @foreach($produtos as $produto)
                    <option value="{{$produto->preco}}" > {{$produto->preco}}</option>
                @endforeach
            </select>    
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script>
        document.getElementById('produtoId').addEventListener("change", function () {
            document.getElementById('valorVenda').selectedIndex = document.getElementById('produtoId').selectedIndex;
        }, false);
    </script>
@endsection


@extends ('index')

@section('cabecalho')
    Lista de Vendas
@endsection

@section('conteudo')
    <div class="panel-body">
        <table class="table table-striped task-table">

            <thead>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Comissão</th>
                <th>Valor da Venda</th>
                <th>Data da Venda</th>
            </thead>

            <tbody>
                @foreach($vendas as $venda)
                    <tr>
                        <td class="table-text">
                            <div>{{ $venda->vendedor_nome }}</div>    
                        </td>
                        <td>
                            <div>{{ $venda->vendedor_email }}<div>
                        </td>
                        <td class="table-text">
                            <div>{{ $venda->comissao }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $venda->produto_preco }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $venda->dataVenda }}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
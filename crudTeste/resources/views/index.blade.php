<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Para Cadastro de Vendas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <div>
            <a class="text-light" href="/index">Home</a>   
        </div>
        <span ></a>
        <div class="float-right">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendedor_view') }}">Cadastrar Vendedor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produto_view') }}">Cadastrar Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendas_view') }}">Cadastrar Vendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('listar_vendas') }}">Lista de Vendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('email') }}">Enviar Relatório de Vendas</a>
                </li>
            </ul>  
        </div>      
    </nav>
    <div class="container">
        <div class ="jumbotron">
            @section('cabecalho')
                Bem vindo ao Sistema Para Cadastro de Vendas
            @endsection
			<h1>@yield('cabecalho')</h1>
		</div>
        @yield('conteudo')   
    </div>
</body>
</html>
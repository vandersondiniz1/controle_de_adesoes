<html>

<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!-- CDN Oficial para aparecer os glyphicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Controle de adesões duplicadas</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">
                        Grupo Vicoa Brasil
                    </a>
                </div>
                <!--
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/home">Listagem</a></li>
                    <!-- <li><a href="#">Novo</a></li> -->
                </ul>
                -->
            </div>
        </nav>
        @yield('conteudo')
        <footer class="footer">
            <p>©Grupo Vicoa Brasil - Desenvolvido por @vandersondiniz - 2021</p>
        </footer>
    </div>
</body>

</html>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 ">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gerenciador de Pesquisadores</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Sistema de Gerenciamento de Pesquisadores</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('pesquisadores.index') }}">Pesquisadores</a>
                    </li>

                    <li class="nav-item ">
                            <a class="nav-link" href="{{ route('publicacoes.index') }}">Publicações</a>
                        </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>


</html>

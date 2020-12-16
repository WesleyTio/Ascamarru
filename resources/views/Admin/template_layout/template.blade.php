<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Ascamarru Painel</title>
</head>

<body>
    <div id="navbar">
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #3CB371">
            <a class="navbar-brand" href="{{ route('admin.home') }}">Ascamarru</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users') }}">Usuários <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.tips') }}">Dicas de reciclagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.type_material') }}">Tipos de Material</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{  route('admin.partner')  }}">Patrocinadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#">Locais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#">Rotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Associados</a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">

                            <!--Icone do usuario admin maaster ou user admin comum-->
                            @auth
                                <span class="material-icons align-middle">
                                    {{ Auth::user()->type_user ===1 ? "engineering":"person"  }} </span>
                                <span>{{ Auth::user()->login }}</span>
                            @endauth

                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item " href="#"> Alterar dados</a>
                            <a class="dropdown-item" href="{{ route('painel.home') }}"> Sair </a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="container-fluid my-3 ">
        @yield('content')
    </div>

    <div>
        @include('Admin.template_layout.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
                        <a class="nav-link" href="{{ route('admin.users') }}">Usuários <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.tips') }}">Dicas de reciclagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tipos de Material</a>
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
                <ul class="navbar-nav" >
                    <li class="nav-item dropdown" >
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="#"
                                class="rounded-circle" width="30" height="30">
                                <!--temporario enquanto não implemento o login-->
                                <span class="material-icons align-middle"> person </span>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            @auth
                                <span>{{ Auth::user()->name }}</span>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>

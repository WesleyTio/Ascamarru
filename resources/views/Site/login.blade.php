<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Login</title>
</head>

<body style="background-color: #3CB371;">

    <div class="container-fluid d-flex justify-content-center h-100" style="margin-top: 10%">

        <div class="card shadow p-0 mb-3  rounded" style="width: 18rem;">
            <div class="d-flex justify-content-center">
                <img src="https://img.icons8.com/color/96/000000/recycle-sign.png" />

            </div>

            <div class=" card-body d-flex justify-content-center form_container">
                <form  action="{{ route('painel.login') }}" method="post" >
                    @csrf
                    <div class="g-recaptcha" data-sitekey=""></div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-light">
                                <i class="material-icons">email</i></span>
                        </div>
                        <input name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                            placeholder="Email">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-light">
                                <i class="material-icons">vpn_key</i></span>
                        </div>
                        <input type="password" name="password" class="form-control" id="inputPassword"
                            placeholder="senha">
                    </div>

                    <div class="d-flex justify-content-center mt-3 ">
                        <button type="submit" class="btn btn-success " style="width: 100%;">Entrar </button>
                    </div>
                </form>

            </div>
            <div class=" d-flex justify-content-center mb-2">
                <a href="" class="card-link">Recuperar senha</a>
            </div>

        </div>
        <!-- aplicar um script-->


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous">
    </script>
</body>

</html>

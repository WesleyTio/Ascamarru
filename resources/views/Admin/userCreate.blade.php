@extends('Admin.template_layout.template')

@section('content')
<!-- javascript responsavel por verificar email-->
<script language="Javascript">
    var vadidateStatusEmail = false;
    var vadidateStatusLogin = false;
    function validacaoEmail(field) {
    nameemail = field.value.toString();
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
        if ((usuario.length >=1) &&
            (dominio.length >=3) &&
            (usuario.search("@")==-1) &&
            (dominio.search("@")==-1) &&
            (usuario.search(" ")==-1) &&
            (dominio.search(" ")==-1) &&
            (dominio.search(".")!=-1) &&
            (dominio.indexOf(".") >=1)&&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {

            // faz a consulta no banco para verificar email ja cadastrado
            var request = $.ajax({
                method: "GET",
                url: "{{ route('admin.users.validate') }}",
                data: { user_email: nameemail, type: 1},
                dataType: "json"
            });
            request.done(function (data){
               var arraylist = JSON.stringify(data);
               var obj = JSON.parse(arraylist);
               if(obj.sucesso === true){
                   document.getElementById("msgemail").innerHTML="<span class='font-weight-bolder text-success'>" + obj.mensagem + "</span>";
                   //document.getElementById("btnSalvarUser").disabled = false;
                   vadidateStatusEmail = true;
                   if (vadidateStatusLogin == true) {
                        document.getElementById("btnSalvarUser").disabled = false;
                   } else {
                        document.getElementById("btnSalvarUser").disabled = true;
                   }
               }else{
                   document.getElementById("msgemail").innerHTML="<span class='font-weight-bolder text-danger'>" + obj.mensagem + "</span>";
                   vadidateStatusEmail = false;
                   document.getElementById("btnSalvarUser").disabled = true;
               }

            });
            request.fail(function (){
               document.getElementById("msgemail").innerHTML="<span class='font-weight-bolder text-danger'> Erro de verificação </span>";
            });
        }
        else{
            document.getElementById("msgemail").innerHTML="<span class='font-weight-bolder text-danger'> E-mail inválido </span>";
            vadidateStatusEmail = false;
            document.getElementById("btnSalvarUser").disabled = false;

        }
    }
    function validacaoLogin(field){
        namelogin = field.value.toString();
        // faz a consulta no banco para verificar login ja cadastrado
        if(namelogin.length > 4){
             var request = $.ajax({
                url: "{{ route('admin.users.validate') }}",
                type:"GET",
                data: { user_login: namelogin, type: 2},
                dataType: 'json'
            });
            request.done(function (data){
               var arraylist = JSON.stringify(data);
               var obj = JSON.parse(arraylist);
               if(obj.sucesso === true){
                   document.getElementById("msglogin").innerHTML="<span class='font-weight-bolder text-success'>" + obj.mensagem + "</span>";
                   //document.getElementById("btnSalvarUser").disabled = false;
                   vadidateStatusLogin = true;
                   if (vadidateStatusEmail == true) {
                        document.getElementById("btnSalvarUser").disabled = false;
                   } else {
                        document.getElementById("btnSalvarUser").disabled = true;
                   }
               }else{
                   document.getElementById("msglogin").innerHTML="<span class='font-weight-bolder text-danger'>" + obj.mensagem + "</span>";
                   ///document.getElementById("btnSalvarUser").disabled = true;
                   vadidateStatusLogin = false;
                   document.getElementById("btnSalvarUser").disabled = true;
               }

            });
            request.fail(function (){
                document.getElementById("msglogin").innerHTML="<span class='font-weight-bolder text-danger'> Erro de verificação </span>";
                vadidateStatusLogin = false;
                document.getElementById("btnSalvarUser").disabled = true;
            });
        }else{
            document.getElementById("msglogin").innerHTML="<span class='font-weight-bolder text-warning'> Login muito pequeno  </span>";
            vadidateStatusLogin = false;
            document.getElementById("btnSalvarUser").disabled = true;
        }
    }
</script>
<div class="container" style="margin-top: 20px">
    <!-- chama o metodo salvar do UserController-->
    <form action="{{ route('admin.users.save') }}" method="POST" autocomplete="on" >
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="user_email" onblur="validacaoEmail(user_email)" class="form-control"
                id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="msgemail" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Nome</label>
            <input type="text" name="user_name" class="form-control" id="inputName" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="exampleInputLogin">Login</label>
            <input type="text" name="user_login" oninput="validacaoLogin(user_login)" class="form-control"
                id="inputLogin" placeholder="Login">
            <small id="msglogin" class="form-text text-muted"></small>
        </div>
        @if( Auth::user()->type_user === 1 )
            <div class="form-group form-check">
                <input type="checkbox" name="user_type" class="form-check-input" id="exampleCheck" value="1">
                <label class="form-check-label">Tornar usuário administrador </label>
            </div>
        @endif
        <button id="btnSalvarUser" type="submit" class=" btn btn-success " disabled="true" >Salvar</button>
    </form>
</div>

@endsection

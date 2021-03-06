@extends('Admin.template_layout.template')

@section('content')

<div id="top" class="row justify-content-center">
    <!-- faz busca na tabela de usuarios -->
    <div class="col-6 m-1">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="busca_user" type="text" placeholder="Pesquisar ADMs">
            <div class="input-group-append">
                <span class="input-group-text text-light bg-success">
                    <i class="material-icons">search</i>
                </span>
            </div>
        </div>
    </div>
    <!--  chama o metodo novo do UserController -->
    <div class="col-3 m-1" >
        <a href="{{ route('admin.users.create') }}" class="btn btn-success pull-right h2">Novo Admin</a>
    </div>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table id="tabela_user"class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" >Nome</th>
                    <th scope="col" >Login</th>
                    <th scope="col" >Email</th>
                    <th scope="col" >Alterar</th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($users as $user )
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->login }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <!-- desbilita os botoes caso o usuario listado seja Admin-->
                            <div>

                                <a class="btn btn-outline-primary {{ $user->type_user ===1 ? "disabled" :""  }}" tabindex="-1" role="button" aria-disabled="true"
                                    href="{{ route('admin.users.edit', $user->id) }}">Editar</a>
                                <a class="btn btn-outline-danger  {{ $user->type_user ===1 ? "disabled" :""  }}" tabindex="-1" role="button" aria-disabled="true" href="#">Deletar</a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection

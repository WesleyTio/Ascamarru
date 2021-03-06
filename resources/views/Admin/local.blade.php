@extends('Admin.template_layout.template')

@section('content')

<div id="top" class="row justify-content-center">
    <!-- faz busca na tabela de locais -->
    <div class="col-6 m-1">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="busca_local"
             type="text" placeholder="Pesquisar locais">
            <div class="input-group-append">
                <span class="input-group-text text-light bg-success">
                    <i class="material-icons">search</i>
                </span>
            </div>
        </div>
    </div>
    <!--  chama o metodo novo do LocalController -->
    <div class="col-3 m-1" >
        <a href="{{ route('admin.locals.create') }}" class="btn btn-success pull-right h2">Novo local</a>
    </div>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table id="tabela_tips"class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" >Nome</th>
                    <th scope="col" >Endereço</th>
                    <th scope="col" >Alterar</th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($locals as $local )
                    <tr>
                        <td>{{ $local->name }}</td>
                        <td>{{ $local->address}}</td>
                        <td>
                            <!-- -->
                            <div>
                                <a class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true"
                                    href="{{ route('admin.locals.edit', $local->id) }}">Editar</a>
                                <a class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true" href="{{ route('admin.locals.delete', $local->id) }}">Deletar</a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection

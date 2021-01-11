@extends('Admin.template_layout.template')

@section('content')

<div id="top" class="row justify-content-center">
    <!-- faz busca na tabela de rotas -->
    <div class="col-6 m-1">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="busca_rota"
             type="text" placeholder="Pesquisar rotas">
            <div class="input-group-append">
                <span class="input-group-text text-light bg-success">
                    <i class="material-icons">search</i>
                </span>
            </div>
        </div>
    </div>
    <!--  chama o metodo novo do RouteController -->
    <div class="col-3 m-1" >
        <a href="{{ route('admin.routes.create') }}" class="btn btn-success pull-right h2">Nova rota</a>
    </div>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table id="tabela_tips"class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" >Nome</th>
                    <th scope="col" >Dias</th>
                    <th scope="col" >Frequência</th>
                    <th scope="col" >Alterar</th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($routes as $route )
                    <tr>
                        <td>{{ $route->name }}</td>
                        <td>
                            <div class="form-inline">
                                <label for="MON" style="display: {{ $route->mon == true ? "block" : "none" }}"> - SEG - </label>
                                <label for="TUE" style="display: {{ $route->tue == true ? "block" : "none"}}">  - TER - </label>
                                <label for="WED" style="display: {{ $route->wed == true ? "block" : "none"}}">   - QUA - </label>
                                <label for="THU" style="display: {{ $route->thu == true ? "block" : "none"}}">  - QUI - </label>
                                <label for="FRI" style="display: {{ $route->fri == true ? "block" : "none"}}">  - SEX - </label>
                                <label for="SAT" style="display: {{ $route->sat == true ? "block" : "none"}}">  - SAB - </label>

                            </div>
                        </td>
                        <td>{{ $route->period }}</td>
                        <td>
                            <!-- -->
                            <div>
                                <a class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true"
                                    href="{{ route('admin.routes.edit', $route->id) }}">Editar</a>
                                <a class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true" href="{{ route('admin.routes.delete', $route->id) }}">Deletar</a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection

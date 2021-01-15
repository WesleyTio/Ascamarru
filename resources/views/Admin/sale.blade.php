@extends('Admin.template_layout.template')

@section('content')

<div id="top" class="row justify-content-center">
    <!-- faz busca na tabela de vendas -->
    <div class="col-6 m-1">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="busca_venda" type="text" placeholder="Pesquisar vendas">
            <div class="input-group-append">
                <span class="input-group-text text-light bg-success">
                    <i class="material-icons">search</i>
                </span>
            </div>
        </div>
    </div>
    <!--  chama o metodo novo do SaleController -->
    <div class="col-3 m-1">
        <a href="{{ route('admin.sales.create') }}" class="btn btn-success pull-right h2">Nova venda</a>
    </div>
</div>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table id="tabela_sales" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Material</th>
                    <th scope="col">valor</th>
                    <th scope="col">Alterar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_sales as $item_sale)

                <tr>
                    <td>{{ $item_sale['data'] }}</td>
                    <td>{{ $item_sale['material']}}</td>
                    <td>{{ $item_sale['valor']}}</td>
                    <td>
                        <!-- -->
                        <div>
                            <a class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true"
                                href="{{ route('admin.locals.edit', $item_sale['id']) }}">Editar</a>
                            <a class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true"
                                href="{{ route('admin.locals.delete', $item_sale['id']) }}">Deletar</a>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection

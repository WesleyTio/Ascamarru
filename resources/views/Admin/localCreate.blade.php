@extends('Admin.template_layout.template')

@section('content')

<div class="container" style="margin-top: 20px">
    <!-- chama o metodo salvar do LocalController-->
    <form action="{{ route('admin.locals.save') }}" method="POST" autocomplete="on" >
        @csrf

        <div id="local" class="form-row border border-info pl-md-3" >
            <label for="InputLocal" class="col-form-label" >Local</label>

            <div class="form-group row col-md-12">
                <div class="col-md">
                    <label for="inputLocalName" class="col-form-label">Nome:*</label>
                    <input type="text" class="form-control" name="local_name" id="inputLocalName" placeholder="Nome do lugar" required>
                </div>

            </div>
            <div class="form-group row col-12 ">
                <div class="form-group col-8">
                    <label for="inputLocalAddress" class="col-form-label" >Endereço:*</label>
                    <input type="text" class="form-control" name="local_address" id="inputLocalAddress" placeholder="Rua, Av nº ..." required>
                </div>

                <div class="form-group col-4">
                    <label for="inputLocalNeigh" class="col-form-label" >Bairro/comunidade:*</label>
                    <input type="text" class="form-control" name="local_neigh" id="inputLocalNeigh" placeholder="Centro..." required>
                </div>

            </div>
            <div class="form-group row col-8">
                <div class="form-group col-6">
                    <label for="inputLocalName" class="col-form-label">Latitude:</label>
                    <input type="number" step="any" inputmode="decimal" class="form-control" name="local_latitude" id="inputLocalName" placeholder="-20,9120490">
                </div>
                <div class="form-group col-6">
                    <label for="inputLocalName" class="col-form-label" >Longitude:</label>
                    <input type="number" step="any" class="form-control" name="local_longitude" id="inputLocalName" placeholder="40,3458920" >
                </div>
            </div>

        </div>
        <div id="route" class="form-row border border-danger pl-md-3 mt-md-3" >
            <label for="InputLocal" class="col-form-label" >Rota</label>
            <div class ="form-group row col-md-12">
                <div class="form-group col-md-8"  >
                    <label for="InputName" class="col-form-label" >Nome:</label>
                    <select type="number" name="route_id" class="form-control" id="inputPeriod" required>
                        <option selected >Escolha uma rota...</option>
                        @foreach ( $routes as $route)
                            <option value="{{ $route->id }}" >{{ $route->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group col-md-4" >
                    <label for="InputDays" class="col-form-label" >Dias:</label>
                    <input type="text" name="route_days" class="form-control" id="inputPeriod" disabled >
                </div>
            </div>
            <div class ="form-group row col-md-12" >
                <div class="form-group col-md-8">
                    <label for="InputPeriod" class="col-form-label" >Frequência</label>
                    <input type="text" name="route_period" class="form-control" id="inputPeriod" disabled >
                </div>
            </div>
        </div>

        <button id="btnSalvarRoute" type="submit" class=" m-md-3 btn btn-success">Salvar</button>
    </form>
</div>

@endsection

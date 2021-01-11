@extends('Admin.template_layout.template')

@section('content')


<div class="container" style="margin-top: 20px">
    <!-- chama o metodo salvar do RouteController-->
    <form action="{{ route('admin.routes.update', $route->id) }}" method="POST" autocomplete="on" >
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="InputName">Nome</label>
            <input type="text" name="route_name" class="form-control" id="inputName" placeholder="Nome da rota" value="{{ $route->name }}">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="route_mon" id="CheckboxMON"
            {{ $route->mon == true ? 'checked' : '' }} value="1">
            <label class="form-check-label" for="CheckboxMON">Segunda</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="route_tue" id="CheckboxTUE"
            {{ $route->tue == true ? 'checked' : '' }} value="1">
            <label class="form-check-label" for="CheckboxTUE">Terça</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="route_wed" id="CheckboxWED"
            {{ $route->wed == true ? 'checked' : '' }} value="1">
            <label class="form-check-label" for="CheckboxWED">Quarta</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="route_thu" id="CheckboxTHU"
            {{ $route->thu == true ? 'checked' : '' }} value="1">
            <label class="form-check-label" for="CheckboxTHU">Quinta</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="route_fri" id="CheckboxFRI"
            {{ $route->fri == true ? 'checked' : '' }}value="1">
            <label class="form-check-label" for="CheckboxFRI">Sexta</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="route_sat" id="CheckboxSAT"
            {{ $route->sat == true ? 'checked' : '' }} value="1">
            <label class="form-check-label" for="CheckboxSAT">Sábado</label>
        </div>
        <div class="form-group">
            <label for="InputPeriod">Frequência</label>
            <input type="text" name="route_period" class="form-control" id="inputPeriod"
            value="{{ $route->period }}"
            placeholder="1 vez na semana, 1ª segunda feira do mês.">
        </div>

        <button id="btnSalvarRoute" type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>

@endsection

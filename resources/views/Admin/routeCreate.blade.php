@extends('Admin.template_layout.template')

@section('content')


<div class="container" style="margin-top: 20px">
    <!-- chama o metodo salvar do RouteController-->
    <form action="{{ route('admin.routes.save') }}" method="POST" autocomplete="on" >
        @csrf
        <div class="form-group">
            <label for="InputName">Nome</label>
            <input type="text" name="route_name" class="form-control" id="inputName" placeholder="Nome da rota">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="route_mon"  type="checkbox" id="CheckboxMON" value="1">
            <label class="form-check-label" for="CheckboxMON">Segunda</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="route_tue" type="checkbox" id="CheckboxTUE" value="1">
            <label class="form-check-label" for="CheckboxTUE">Terça</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="route_wed" type="checkbox" id="CheckboxWED" value="1">
            <label class="form-check-label" for="CheckboxWED">Quarta</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="route_thu" type="checkbox" id="CheckboxTHU" value="1">
            <label class="form-check-label" for="CheckboxTHU">Quinta</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="route_fri" type="checkbox" id="CheckboxFRI" value="1">
            <label class="form-check-label" for="CheckboxFRI">Sexta</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="route_sat" type="checkbox" id="CheckboxSAT" value="1">
            <label class="form-check-label" for="CheckboxSAT">Sábado</label>
        </div>
        <div class="form-group">
            <label for="InputPeriod">Frequência</label>
            <input type="text" name="route_period" class="form-control" id="inputPeriod" placeholder="1 vez na semana, 1ª segunda feira do mês.">
        </div>

        <button id="btnSalvarRoute" type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>

@endsection

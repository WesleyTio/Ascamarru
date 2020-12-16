@extends('Admin.template_layout.template')

@section('content')


<div class="container" style="margin-top: 20px">
    <!-- chama o metodo salvar do typeMaterialController-->
    <form action="{{ route('admin.type_material.save') }}" method="POST" autocomplete="on" >
        @csrf
        <div class="form-group">
            <label for="InputName">Nome</label>
            <input type="text" name="type_name" class="form-control" id="inputName" placeholder="">
        </div>
        <div class="form-group">
            <label for="InputColor">Cor</label>
            <input type="text" name="type_color" class="form-control" id="inputCor" placeholder="">
        </div>
        <div class="input-group">
            <div class="col-md-6 mb-3">
                <img id="imageType" src="{{ asset('storage/img/reclycle_tip.jpg') }}"  name="foto_url" class="img-thumbnail img-fluid" >
            </div>
           <div class="col-md-6 mb-3">
                <div class="custom-file">
                    <input type="file"  name="type_image"  onchange="readURL(this)" class="custom-file-input" id="imageInputTip">
                    <label  class="custom-file-label"  for="imageInput">Escolher Imagem</label>
                </div>
           </div>
       </div>

        <button id="btnSalvarTypeMaterial" type="submit" class=" btn btn-success">Salvar</button>
    </form>
</div>
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var name = input.files[0].name;
            reader.onload = function(e) {
              $('#imageType').attr('src', e.target.result);
              $(".custom-file-label").addClass("selected").html(name);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection

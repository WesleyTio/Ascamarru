@extends('Admin.template_layout.template')

@section('content')


<div class="container" style="margin-top: 20px">
    <!-- chama o metodo salvar do tipController-->
    <form action="{{ route('admin.tips.update',$tip->id) }}" method="POST" autocomplete="on" >
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputTitile">Título</label>
            <input type="text" name="tip_title" class="form-control" id="inputName" value="{{ $tip->title }}">
        </div>
        <div class="form-group">
            <label for="exampleInputDesc">Descrição</label>
            <textarea type="text" name="tip_desc"  class="form-control"
                id="inputDesc" >
                {{ $tip->description }}
            </textarea>
        </div>
        <div class="input-group">
            <div class="col-md-6 mb-3">
                <img id="imageTip" src="{{ $tip->image==NULL ? asset('storage/img/facebook.png'): asset('storage/img/reclycle_tip.jpg') }}"  name="foto_url" class="img-thumbnail img-fluid" >
            </div>
           <div class="col-md-6 mb-3">
                <div class="custom-file">
                    <input type="file"  name="tip_image"  onchange="readURL(this)" class="custom-file-input" id="imageInputTip">
                    <label  class="custom-file-label"  for="imageInput">Escolher Imagem</label>
                </div>
           </div>
       </div>

        <button id="btnSalvartip" type="submit" class=" btn btn-success">Salvar</button>
    </form>
</div>
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var name = input.files[0].name;
            reader.onload = function(e) {
              $('#imageTip').attr('src', e.target.result);
              $(".custom-file-label").addClass("selected").html(name);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection

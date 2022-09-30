@extends('vehicles.layout')  {{--cria uma extensao da nossa layout --}}
@section('content'){{--inicia a content, que e chamada pelo @yield na nossa layout  --}}
 
<div class="card col-md-12 mt-4" >
  <div class="card-header">Adicionar Marca</div>
  <div class="card-body">
      
      <form action="{{ url('brands') }}" method="post">
        @csrf
        <label>Adicione uma nova marca</label></br>
        <input type="text" name="brand[nome]" id="brand" class="form-control"></br>
        {{-- <label>Nacionalidade da marca</label></br> --}}
        {{-- <input type="text" name="brand[nacionalidade]" id="brand" class="form-control"></br> --}}
        <input type="submit" value="Cadastrar Marca" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection  {{-- finaliza a section --}}
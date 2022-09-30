@extends('vehicles.layout')
@section('content')
 
<div class="card col-md-12 mt-4">
  <div class="card-header">Editar dados da Marca</div>
  <div class="card-body">
      
      <form action="{{ url('brands/' .$brands->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH"){{--  Metodo para atualizar dados--}}
        <input type="hidden" name="id" id="id" value="{{$brands->id}}" id="id" />
        <label>Marca</label></br>
        <input type="text" name="brand[nome]" id="marca" value="{{$brands->brand->nome}}" class="form-control"></br>
       
        <input type="submit" value="Atualizar Dados" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
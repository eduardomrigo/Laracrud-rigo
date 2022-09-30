@extends('vehicles.layout')
@section('content')
 
<div class="card col-md-12 mt-4">
  <div class="card-header">Editar dados do Veículo</div>
  <div class="card-body">
      
      <form action="{{ url('vehicle/' .$vehicles->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH"){{--  Metodo para atualizar dados--}}
        <input type="hidden" name="id" id="id" value="{{$vehicles->id}}" id="id" />
        <label>Marca</label></br>
        <input type="text" name="marca" id="marca" value="{{$vehicles->marca}}" class="form-control"></br>
        <label>Modelo</label></br>
        <input type="text" name="modelo" id="modelo" value="{{$vehicles->modelo}}" class="form-control"></br>
        <label>Ano</label></br>
        <input type="number" name="ano" id="ano" value="{{$vehicles->ano}}" class="form-control"></br>
        <input type="submit" value="Atualizar Dados" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
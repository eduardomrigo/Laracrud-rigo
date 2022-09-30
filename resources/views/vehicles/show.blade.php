@extends('vehicles.layout')
@section('content')
 
 
<div class="card col-md-12 mt-4">
  <div class="card-header">Página do Veículo</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-text">Marca : <span>{{ $vehicles->marca }}</span></h5>
        <h5 class="card-text">Modelo : <span>{{ $vehicles->modelo }}</span></h5>
        <h5 class="card-text">Ano : <span>{{ $vehicles->ano }}</span></h5>
  </div>
       

  
  </div>
</div>
@endsection
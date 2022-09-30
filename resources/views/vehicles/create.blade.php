@extends('vehicles.layout')  {{--cria uma extensao da nossa layout --}}
@section('content'){{--inicia a content, que e chamada pelo @yield na nossa layout  --}}
 
<div class="card col-md-12 mt-4" >
  <div class="card-header">Adicionar Veículo</div>
  <div class="card-body">
      
      <form action="{{ url('vehicle') }}" method="post">
        {!! csrf_field() !!} {{--parametro csrf do laravel para passar o token  --}}
        <label>Marca</label></br>
        <select class="form-select" name="marca">
          <option>Selecione a Marca</option>
          @foreach($brands as $brand)
              <option value="{{$brand->brand->nome}}">{{$brand->brand->nome}}</option>
          @endforeach 
      </select></br>
        <label>Modelo</label></br>
        <input type="text" name="modelo" id="modelo" class="form-control"></br>
        <label>Ano</label></br>
        <input type="number" name="ano" id="ano" class="form-control"></br>
        <input type="submit" value="Cadastrar Veiculo" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection  {{-- finaliza a section --}}
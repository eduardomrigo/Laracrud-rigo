@extends('vehicles.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12 mt-4 index_table">
                <div class="card">
                    <div class="card-header">
                        <h2>Cadastro de Veículos</h2>
                        
                    </div>
                    <div class="card-body">
                        <div class="search">

                            <a href="{{ url('/vehicle/create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus" aria-hidden="true"></i> <i class="bi bi-plus-circle"></i> Adicionar Veículo
                            </a>
                            <a href="{{ url('/brands/create') }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-plus" aria-hidden="true"></i> <i class="bi bi-plus-circle"></i> Adicionar marca
                            </a>
                        </div>
                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Ano</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($vehicles as $item) {{--um loop  --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> 
                                        <td>{{ $item->marca }}</td> {{--acessa os dados do banco--}}
                                        <td>{{ $item->modelo }}</td>
                                        <td>{{ $item->ano }}</td>
 
                                        <td>
                                            <a href="{{ url('/vehicle/' . $item->id) }}" ><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> <i class="bi bi-eye"></i> Ver</button></a>
                                            <a href="{{ url('/vehicle/' . $item->id . '/edit') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <i class="bi bi-pencil-square"></i> Editar</button></a>
 
                                            <form method="POST" action="{{ url('/vehicle' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> <i class="bi bi-trash3"></i> Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script type="text/javascript">
  
        $('#datatable').DataTable({
            language: {
                url: '/assets/ptbr-json'
            }
          
        });
   
    </script>
  
@endsection
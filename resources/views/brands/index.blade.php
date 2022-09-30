@extends('vehicles.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12 mt-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Cadastro de Marcas</h2>
                        
                    </div>
                    <div class="card-body">
                        <div class="search">

                            <a href="{{ url('/brands/create') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus" aria-hidden="true"></i> <i class="bi bi-plus-circle"></i> Adicionar marca
                            </a>
                        </div>
                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Marca</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($brand as $item) {{--um loop  --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> 
                                        <td>{{ $item->brand->nome }}</td> {{--acessa os dados do banco--}}
 
                                        <td>
                                                <a href="{{ url('/brands/' . $item->id . '/edit') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <i class="bi bi-pencil-square"></i> Editar</button></a>
 
                                            <form method="POST" action="{{ url('/brands' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
  
@endsection
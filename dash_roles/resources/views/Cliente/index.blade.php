@extends('layouts.app')

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cliente</h3>
        </div>
                    
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><h3>Clientes Registrados</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('cliente.create') }}" class="btn btn-info" >Agregar Cliente</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>id</th>
                                <th>nombre</th>
                                <th>ap_paterno</th>
                                <th>ap_materno</th>
                                <th>fech_nac</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($clientes->count())
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nombre}}</td>
                                    <td>{{$cliente->ap_paterno}}</td>
                                    <td>{{$cliente->ap_materno}}</td>
                                    <td>{{$cliente->fech_nac}}</td>    
                                    
                                    <td><a class="btn btn-primary btn-xs" href="{{action('App\Http\Controllers\ClienteController@edit', $cliente->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>

                                    <td>
                                        <form action="{{action('App\Http\Controllers\ClienteController@destroy', $cliente->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphico
                                            glyphicon-trash"></span></button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">No hay registro !!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $clientes->links() }}
            </div>
        </div>
    </section>
</div>


                        
                        
                        
                
        </div>
    </section>
@endsection
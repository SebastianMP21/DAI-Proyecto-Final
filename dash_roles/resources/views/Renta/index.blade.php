
@extends('layouts.app')

@section('content')

<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Rentas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
<section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><h3>Lista Rentas</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('renta.create') }}" class="btn btn-info" >Añadir Renta</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>id</th>
                                <th>Fecha de registro</th>
                                <th>Fecha de devolución</th>
                                <th>Fecha de entrega</th>
                                <th>ID de película</th>
                                <th>ID de cliente</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($rentas->count())
                                @foreach($rentas as $renta)
                                <tr>
                                    <td>{{$renta->id}}</td>
                                    <td>{{$renta->fecha_registro}}</td>
                                    <td>{{$renta->fecha_devolucion}}</td>
                                    <td>{{$renta->fecha_entrega}}</td>
                                    <td>{{$renta->id_peli}}</td>
                                    <td>{{$renta->id_cli}}</td>
                                    
                                    <td><a class="btn btn-primary btn-xs" href="{{action('App\Http\Controllers\RentaController@edit', $renta->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>

                                    <td>
                                        <form action="{{action('App\Http\Controllers\RentaController@destroy', $renta->id)}}" method="post">
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
                {{ $rentas->links() }}
            </div>
        </div>
    </section>
</div>
        
                
        </div>
    </section>
@endsection
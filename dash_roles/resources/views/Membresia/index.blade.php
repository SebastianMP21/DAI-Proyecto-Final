@extends('layouts.app')

@section('content')

<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Membresia</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><h3>Lista de Membresias</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('membresia.create') }}" class="btn btn-info" >Añadir Membresia</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>fecha_expedicion</th>
                                <th>fecha_expiracion</th>
                                <th>id_clie</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($membresias->count())
                                @foreach($membresias as $membresia)
                                <tr>
                                    <td>{{$membresia->fecha_expedicion}}</td>
                                    <td>{{$membresia->fecha_expiracion}}</td>
                                    <td>{{$membresia->id_clie}}</td>
                                    
                                    <td><a class="btn btn-primary btn-xs" href="{{action('App\Http\Controllers\MembresiaController@edit', $membresia->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>

                                    <td>
                                        <form action="{{action('App\Http\Controllers\MembresiaController@destroy', $membresia->id)}}" method="post">
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
                {{ $membresias->links() }}
            </div>
        </div>
    </section>
</div>
</div>
    </section>
@endsection
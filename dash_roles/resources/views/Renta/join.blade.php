
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
                                                <div class="pull-left"><h3>Reporte de Cliente</h3></div>
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                        <a href="{{ route('home') }}" class="btn btn-info" >Atrás</a>
                                                    </div>
                                                </div>
                                                <div class="table-container" style="width:700px">
                                                    <table id="mytable" class="table table-borded table-striped">
                                                        <thead>
                                                            <th>nombre del cliente</th>
                                                            <th>nombre de pelicula</th>
                                                            <th>fecha registro</th>
                                                            <th>fecha devolución</th>
                                                        </thead>
                                                        <tbody>
                                                            @if($peliculas->count())
                                                            @foreach($peliculas as $pelicula)
                                                            <tr>
                                                                <td>{{$pelicula->nombre}}</td>
                                                                <td>{{$pelicula->pelicula}}</td>
                                                                <td>{{$pelicula->fecha_registro}}</td>
                                                                <td>{{$pelicula->fecha_devolucion}}</td>                                       
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
                                        </div>
                                    </div>
                                </section>
                            
            </div>
                
        </div>
    </section>
@endsection
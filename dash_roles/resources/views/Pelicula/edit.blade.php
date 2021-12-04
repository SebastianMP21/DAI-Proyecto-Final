@extends('layouts.app')

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Pelicula</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-info">
                {{Session::get('success')}}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nueva Pelicula</h3>
                </div>
                <div class="panel-body">	 	 	 	 	 
                    <div class="table-container">
                        <form method="POST" action="{{ route('pelicula.update', $pelicula->id) }}" role="form">
                            {{ csrf_field() }} 
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$pelicula->nombre}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="director" id="director" class="form-control input-sm" value="{{$pelicula->director}}">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="genero" id="genero" class="form-control input-sm" value="{{$pelicula->genero}}">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="artista1" id="artista1" class="form-control input-sm" value="{{$pelicula->artista1}}">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="artista2" id="artista2" class="form-control input-sm" value="{{$pelicula->artista2}}">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 colmd-12">
                                    <input type="submit" value="Actualizar" class="btn btn-success btn-block">
                                    <a href="{{ route('pelicula.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                </div>	 }
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


                        
                        
                       
                
        </div>
    </section>
@endsection
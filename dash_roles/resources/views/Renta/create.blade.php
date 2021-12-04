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
        <div class="col-md-8 col-md-offset-2" >
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
            <div class="alert alert-info" >
                {{Session::get('success')}}
            </div>
            @endif
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title">Nueva Renta</h3>
                </div>
                <div class="panel-body" style="width:800px;margin-left:300px;margin-right:300px">	 	 	 	 	 
                    <div class="table-container">
                        <form method="POST" action="{{ route('renta.store') }}" role="form">
                            {{ csrf_field() }}
                            <div class="row" >
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="date" name="fecha_registro" id="fecha_registro" class="form-control input-sm" placeholder="Fecha de Registro"> 
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="date" name="fecha_devolucion" id="fecha_devolucion" class="form-control input-sm" placeholder="Fecha de Devolucion"> 
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control input-sm" placeholder="Fecha de Entrega"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="id_peli" id="id_peli" class="form-control input-sm" placeholder="ID de pelicula">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="id_cli" id="id_cli" class="form-control input-sm" placeholder="ID de cliente">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 colmd-12">
                                    <input type="submit" value="Guardar" class="btn btn-success btn-block">
                                    <a href="{{ route('renta.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                </div>
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
@extends('layouts.app')

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cliente</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
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
                    <h3 class="panel-title">Nuevo Cliente</h3>
                </div>
                <div class="panel-body" style="width:800px;margin-left:300px;margin-right:300px">	 	 	 	 	 
                    <div class="table-container">
                        <form method="POST" action="{{ route('cliente.store') }}" role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="id" id="id" class="form-control input-sm" placeholder="ID">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="ap_paterno" id="ap_paterno" class="form-control input-sm" placeholder="ap_paterno">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="text" name="ap_materno" id="ap_materno" class="form-control input-sm" placeholder="ap_materno">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 colmd-6">
                                    <div class="form-group">
                                        <input type="date" name="fech_nac" id="fech_nac" class="form-control input-sm" placeholder="fech_nac">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 colmd-12">
                                    <input type="submit" value="Guardar" class="btn btn-success btn-block">
                                    <a href="{{ route('cliente.index') }}" class="btn btn-info btn-block" >Atrás</a>
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
                </div>
            </div>
                
        </div>
    </section>
@endsection
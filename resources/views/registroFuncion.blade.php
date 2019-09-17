

@extends('welcome')

@section('title','Registro Funcion')

@section('contenido')

  <img style="position:absolute; top:300px; left:600px;"  src="/img/agregarfunci.png" >
	<div class="container">    
    <h3>Registro de función</h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">

 

                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

 
                    <form class="form-horizontal" method="POST" action="/funcion" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Fecha</label>
                            <div class="col-md-4">
                                <input id="fecha" type="date" class="form-control" name="fecha">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Hora</label>
                            <div class="col-md-4">
                                <input id="hora" type="time" class="form-control" name="hora">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Pelícua</label>
                            <div class="col-md-4">
                             <select class="form-control" name="pelicula_id" id="pelicula_id">
                                <option value="" disabled selected>Seleccione Película</option>
                                    @foreach ($peliculas as $pelicula)
                                    <option value="{{ $pelicula['idpelicula']}}">{{ $pelicula['titulo']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Sala</label>
                            <div class="col-md-4">
                             <select class="form-control" name="sala_id" id="sala_id">
                                <option value="" disabled selected>Seleccione Sala</option>
                                    @foreach ($salas as $sala)
                                    <option value="{{ $sala['idsala']}}">{{ $sala['sala']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>


                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar funcion
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





     <center>  <img src=""> </center>
</div>
@endsection
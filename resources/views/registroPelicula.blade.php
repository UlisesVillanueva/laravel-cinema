

@extends('welcome')

@section('title','Registro pelicula')

@section('contenido')

 <img style="position:absolute; top:300px; left:600px;"   src="/img/agregarpeli.png" >
	<div class="container">    
    <h3>Registro de película</h3>
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

 
                    <form class="form-horizontal" method="POST" action="/pelicula" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Titulo</label>
                            <div class="col-md-8">
                                <input id="titulo" type="TEXT" class="form-control" name="titulo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Sinopsis</label>
                            <div class="col-md-8">
                                <input id="sinopsis" type="TEXT" class="form-control" name="sinopsis">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha Lanzamiento</label>
                            <div class="col-md-4">
                                <input id="fechalanza" type="date" class="form-control" name="fechalanza">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Duración (Minutos)</label>
                            <div class="col-md-4">
                                <input id="duracion" type="digiter" class="form-control" name="duracion">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label">Pais</label>
                            <div class="col-md-4">
                             <select class="form-control" name="pais_id" id="pais_id">
                                <option value="" disabled selected>Seleccione Pais</option>
                                    @foreach ($paises as $pais)
                                    <option value="{{ $pais['idpais']}}">{{ $pais['nombre']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Genero</label>
                            <div class="col-md-4">
                             <select class="form-control" name="genero_id" id="genero_id">
                                <option value="" disabled selected>Seleccione Género</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{ $genero['idgenero']}}">{{ $genero['genero']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>


                         <div class="form-group">
                            <label class="col-md-4 control-label">Clasificación</label>
                            <div class="col-md-4">
                             <select class="form-control" name="clasificacion_id" id="clasificacion_id">
                                <option value="" disabled selected>Seleccione clasificación</option>
                                    @foreach ($clasificaciones as $clasificacion)
                                    <option value="{{ $clasificacion['idclasificacion']}}">{{$clasificacion['clasificacion']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Imagen</label>
                            <div class="col-md-4">
                                <input type="file" name="Imagen" id="Imagen" class="form-control" placeholder="Nombre">
                            </div>
                        </div>


                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar película
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
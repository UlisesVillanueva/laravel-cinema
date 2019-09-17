@extends('welcome')
@section('title','Editar pelicula')
@section('contenido')

 <img style="position:absolute; top:300px; left:600px;"  src="/img/editarpeli.png" >
	<div class="container">    
    <h3>Editar película</h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">

 

 
                    <form class="form-horizontal" method="POST" action=" {{ route('pelicula.update',$pelicula->idpelicula)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                        
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Titulo</label>
                            <div class="col-md-8">
                                <input id="titulo" type="TEXT" class="form-control" name="titulo"  value="{{$pelicula->titulo}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Sinopsis</label>
                            <div class="col-md-8">
                                <input id="sinopsis" type="TEXT" class="form-control" name="sinopsis" value="{{$pelicula->sinopsis}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha Lanzamiento</label>
                            <div class="col-md-4">
                                <input id="fechalanza" type="date" class="form-control" name="fechalanza" value="{{$pelicula->fechalanzamiento}}" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Duración (Minutos)</label>
                            <div class="col-md-4">
                                <input id="duracion" type="digiter" class="form-control" name="duracion" value="{{$pelicula->duracion}}" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label">Pais</label>
                            <div class="col-md-4">
                             <select class="form-control" name="pais_id" id="pais_id">

                                <option value="" disabled selected>Seleccione Pais</option>
                                @foreach ($paises as $pais)
                               <option value="{{ $pais['idpais' ]}}">{{ $pais['nombre']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Genero</label>
                            <div class="col-md-4">
                             <select class="form-control" name="genero_id" id="genero_id">
                                
                                 <option value="" >Seleccione Género</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{ $genero['idgenero' ]}}">{{ $genero['genero']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>


                         <div class="form-group">
                            <label class="col-md-4 control-label">Clasificación</label>
                            <div class="col-md-4">
                             <select class="form-control" name="clasificacion_id" id="clasificacion_id">
                                

                                <option value="" >Seleccione clasificación</option>
                                @foreach ($clasificaciones as $clasificacion)
                                    <option value="{{ $clasificacion['idclasificacion' ]}}">{{ $clasificacion['clasificacion']}}</option>
                                     @endforeach
                            </select>
                         </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Imagen</label>
                            <div class="col-md-4">
                                <input type="file" name="Imagen" id="Imagen" class="form-control" placeholder="Nombre" required>
                            </div>
                        </div>


                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar película
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
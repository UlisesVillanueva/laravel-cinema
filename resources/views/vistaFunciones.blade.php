@extends('welcome')
@section('title','Listado de peliculas')
@section('contenido')


    @if(session('status')) 
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif 

<h3 align="center" ><br>Cartelera general</h3>

<div style="" class="container">
    <div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Película</th>
      <th scope="col">Sala</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>        
                        @if(isset($funciones))
                        @foreach($funciones as $funcion)
                        <td>{{$funcion->fecha}}</td>
                        <td>{{$funcion->hora}}</td>
                        @if(isset($peliculas))
                        @foreach($peliculas as $pelicula)
                            @if (($funcion->pelicula_id)==($pelicula->idpelicula))
                                <td>{{$pelicula->titulo}}</td>
                            @endif
                        @endforeach
                        @endif
                        @if(isset($salas))
                        @foreach($salas as $sala)
                            @if (($funcion->sala_id)==($sala->idsala))
                                <td>{{$sala->sala}}</td>
                            @endif
                        @endforeach
                        @endif
                        <td>
                        <a href="/funcion/{{$funcion->idfuncion}}/edit" title="Editar" data-toggle="tooltip">
                           <img src="img/editar.png"></a>
                         
                        </td>
                        <td>
                            <form onclick="return confirm ('¿Esta seguro de eliminar la función?')"  method="POST" action="/funcion/{{$funcion->idfuncion}}">
                                    @csrf {{ method_field('DELETE') }}
                                    <input   type="image" src="img/eliminar.png" " value="Eliminar">    
                        </form>
                        </td>
    </tr>
  </tbody>
        @endforeach 
    @endif
</table>




            @endsection
@extends('welcome')
@section('title', 'Pelicula')
@section('contenido')
  

<div class="row">


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/imagenes/{{$pelicula->imagen}}" alt= >
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <td>
                <a href="/pelicula/{{$pelicula->idpelicula}}/edit" title="Editar" data-toggle="tooltip">
                <img src="/img/editar.png"></a>        
            </td>
            <td>
                <form onclick="return confirm ('¿Esta seguro de eliminar la función?')"  method="POST" action="/pelicula/{{$pelicula->idpelicula}}">
                @csrf {{ method_field('DELETE') }}
                <input   title="Eliminar" type="image" src="/img/eliminar.png" " value="Eliminar">    
                </form>
            </td>
          </tr>
        </thead>
      </table>
    </div>
</div>


  <div  style="position:absolute; top:240px; left:310px;>
    <div class="card">
      <div class="card-header">
         <h2 class="card-title" style="color:black;">Título:<em>{{$pelicula->titulo}}</em></h2>
       </div>
          <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p> Sinopsis: {{$pelicula->sinopsis}}</p>
                <p> Duración: {{$pelicula->duracion}} min.</p>
                <p> <p1>País: {{$pais->nombre}}</p>
                <p> <p1>Género: {{$genero->genero}}</p>
                <p> <p1 style"color:red;">Clasificación:<p1> {{$clasificacion->clasificacion}}</p>    
              </blockquote>
          </div>
  </div>
</div>

      






<h4 class="card-title" style="text-align: center;"><br>Funciones disponibles para la película: <em>{{$pelicula->titulo}}</em></h4>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Película</th>
        <th scope="col">Sala</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
      </tr>
    </thead>
    <tbody>
        @if(isset($funciones))
          @foreach($funciones as $funcion)
            <td>{{$pelicula->titulo}}</td>
              @if(isset($salas))
                @foreach($salas as $sala)
                  @if (($funcion->sala_id)==($sala->idsala))
                    <td>{{$sala->sala}}</td>
                  @endif
                @endforeach
              @endif
            <td>{{$funcion->fecha}}</td>
            <td>{{$funcion->hora}}</td>
      </tr>
    </tbody>
          @endforeach 
        @endif
  </table>
@endsection


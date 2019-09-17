@extends('welcome')
@section('title','Listado de peliculas')
@section('contenido')


	@if(session('status')) 
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif 

<div class="container">
	<div class="row">
    	@if(isset($peliculas))
			@foreach($peliculas as $pelicula)
				<div class="col-sm">
					<div class="card" style="width: 15rem;">
					  	<img class="card-img-top" src="/imagenes/{{$pelicula->imagen}}"" alt="">
					  		<div class="card-body">
					  			<center>
					  			<h5 class="card-title">{{ $pelicula->titulo }}</h5>
						    	<a href="/pelicula/{{$pelicula->idpelicula}}"  class="btn btn-outline-dark">Ver más</a>
					  			</center>
					  		</div>
					</div>
				</div>
    		@endforeach
		@endif
  	</div>
</div>
@endsection


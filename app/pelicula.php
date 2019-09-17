<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{

	protected $table = 'peliculas';


    protected $fillable=['idpelicula','titulo','fechalanzamiento','duracion','pais_id','sinopsis','clasificacion_id','genero_id','imagen','created_at','updated_at'];

    protected $primaryKey ='idpelicula';
    


}

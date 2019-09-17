<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcione extends Model
{	    
	protected $primaryKey ='idfuncion';
    protected $table="funciones";
    protected $fillable=['idfuncion','fecha','hora','sala_id','pelicula_id'];
}

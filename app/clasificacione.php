<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clasificacione extends Model
{	
	protected $primaryKey ='idclasificacion';
    protected $table="clasificaciones";
    protected $fillable=['idclasificacion','clasificacion'];
}



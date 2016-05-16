<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';

    protected $fillable = ['nombre'];


    /* Relaciones */
    public function rutas(){

      return $this->hasMany(Ruta::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = 'rutas';

    protected $fillable = ['nombre'];

    /* Relaciones */

    public function rutaAuto(){

        return $this->hasMany(Auto_ruta::class);
    }
}

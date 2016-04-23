<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $table = 'oficinas';

    protected $fillable = ['nombre', 'direccion', 'telefono'];


    /* Relaciones */
    public function persona(){

      return $this->hasMany(Persona::class);
    }
}

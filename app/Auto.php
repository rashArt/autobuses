<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'autobuses';

    protected $fillable = ['numero', 'marca', 'modelo', 'serial', 'matricula'];

    /* Relaciones */

    public function autoDueno(){

        return $this->hasMany(Auto_dueno::class);
    }

    public function autoResponsable(){

        return $this->hasMany(Auto_responsable::class);
    }

}

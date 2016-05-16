<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'autobuses';

    protected $fillable = ['numero', 'marca', 'modelo', 'serial', 'matricula'];

    /* Relaciones */

    public function personaDuenos(){

        return $this->belongsToMany("App\Persona","auto_dueno")->withPivot('persona_id');
    }

    public function personaResponsables(){

        return $this->belongsToMany("App\Persona","auto_responsable")->withPivot('persona_id');
    }

    public function autoRuta(){

        return $this->hasMany(Auto_ruta::class);
    }

}

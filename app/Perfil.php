<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';

    protected $fillable = ['nombre'];

    /* Relaciones */

    public function user(){

      return $this->hasMany(User::class);
    }

}

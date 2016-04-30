<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Oficina;
use App\Persona;
use App\Auto;

class DashboardController extends Controller
{
    public function principal()
    {
        $personas = Persona::count();
        $oficinas = Oficina::count();
        $autobuses = Auto::count();

        return view('principal')
            ->with('personas', $personas)
            ->with('oficinas', $oficinas)
            ->with('autobuses', $autobuses);
    }
}

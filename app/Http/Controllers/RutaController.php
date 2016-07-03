<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ruta;
use App\Auto;
use App\Localidad;
use Laracasts\Flash\Flash;

class RutaController extends Controller
{

    public function index()
    {
        $rutas = Ruta::all();

        return view('rutas.index')
            ->with('rutas', $rutas);
    }

    public function create()
    {
        $localidades = Localidad::all();

        return view('rutas.create')
            ->with('localidades', $localidades);
    }

    public function store(Request $request)
    {
        $localidades = $request->inicio_id.' - '.$request->fin_id;

        $buscar = Ruta::where('nombre', $localidades)->get();
        if (count($buscar) > 0) {

            Flash::success('Ya existe esa Ruta');

            return back();
        }

        $ruta = new Ruta();
        $ruta->nombre  = $localidades;
        $ruta->save();

        Flash::success('Se ha asignado la Ruta '. $ruta->nombre .' exitosamente!');

        return redirect()->route('rutas.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $ruta = Ruta::find($id);
        $ruta->status = $request->status;
        $ruta->save();

        Flash::success('Se ha cambiado el estado de la ruta exitosamente!');

        return back();
    }


    public function delete($id)
    {
        $ruta = Ruta::find($id);
        $ruta->delete();

        Flash::success('Se ha eliminado exitosamente!');

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AutoRutaCreateRequest;
use App\Http\Controllers\Controller;
use App\Auto_ruta;
use App\Ruta;
use App\Auto;
use Laracasts\Flash\Flash;

class AutoRutaController extends Controller
{

    public function index()
    {
        $rutas = Auto_ruta::orderBy('created_at', 'ASC')->get();

        return view('asignaciones.index')
            ->with('rutas', $rutas);
    }

    public function create()
    {
        $rutas = Ruta::whereNotIn('status', [0])->lists('nombre', 'id');
        $autobuses = Auto::all();

        return view('asignaciones.create')
            ->with('rutas', $rutas)
            ->with('autobuses', $autobuses);
    }

    public function store(AutoRutaCreateRequest $request)
    {
        $ruta = new Auto_ruta();
        $ruta->auto_id  = $request->auto_id;
        $ruta->ruta_id  = $request->ruta_id;
        $ruta->save();

        Flash::success('Se ha asignado la Ruta exitosamente!');

        return redirect()->route('asignaciones.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ruta = Auto_ruta::find($id);
        $rutas = Ruta::whereNotIn('id', [$ruta->ruta_id])->lists('nombre', 'id');
        $autobuses = Auto::all();

        return view('asignaciones.edit')
            ->with('ruta', $ruta)
            ->with('rutas', $rutas)
            ->with('autobuses', $autobuses);
    }

    public function update(Request $request, $id)
    {
        $ruta = Auto_ruta::find($id);
        $ruta->ruta_id = $request->ruta_id;
        // $ruta->auto_id = $ruta->auto_id;
        $ruta->save();

        Flash::success('Se ha actualizado la ruta asignada exitosamente!');

        return redirect()->route('asignaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $ruta = Auto_ruta::find($id);
        $ruta->delete();

        Flash::success('Se ha eliminado exitosamente!');

        return back();
    }
}

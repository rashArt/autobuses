<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AutoCreateRequest;
use App\Http\Requests\AutoUpdateRequest;
use App\Http\Controllers\Controller;
use App\Persona;
use App\Auto;
use App\Auto_dueno;
use App\Auto_responsable;
use Laracasts\Flash\Flash;

class AutoController extends Controller
{

    public function index()
    {
        $bus = Auto::all();

        return view('autobuses.index')
            ->with('bus', $bus);
    }

    public function create()
    {
        $personas = Persona::all();

        return view('autobuses.create')
            ->with('personas', $personas);
    }

    public function store(AutoCreateRequest $request)
    {
        $bus = new Auto();
        $bus->numero = $request->numero;
        $bus->marca = $request->marca;
        $bus->modelo = $request->modelo;
        $bus->serial = $request->serial;
        $bus->matricula = $request->matricula;
        $bus->save();

        // consultar ultimo registrado
        $query = Auto::all();
        $ultimo = $query->last();
        $id_bus = $ultimo->id;

        $dueno = new Auto_dueno();
        $dueno->persona_id = $request->dueno;
        $dueno->auto_id = $id_bus;
        $dueno->save();

        $responsable = new Auto_responsable();
        $responsable->persona_id = $request->responsable;
        $responsable->auto_id = $id_bus;
        $responsable->save();

        Flash::success('Se ha registrado el Autobus #'. $bus->numero .' exitosamente!');

        return redirect()->route('autobuses.index');
    }

    public function show($id)
    {
        $bus = Auto::find($id);

        return view('autobuses.show')->with('bus', $bus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AutoUpdateRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Perfil;
use App\Persona;
use App\Oficina;
use Laracasts\Flash\Flash;

class UserController extends Controller
{
    public function index()
    {
        $users = Persona::all();

        return view('users.index')
            ->with('users', $users);
    }

    public function create()
    {
        $perfiles = Perfil::lists('nombre','id');
        $oficinas = Oficina::lists('nombre','id');

        return view('users.create')
            ->with('oficinas', $oficinas)
            ->with('perfiles', $perfiles);
    }

    public function store(UserCreateRequest $request)
    {
        $user = new User();
        $user->perfil_id = $request->perfil_id;
        $user->password  = bcrypt($request->password);
        $user->email     = $request->email;
        $user->save();

        // consultar ultimo registrado
        $query = User::all();
        $ultimo = $query->last();
        $id_user = $ultimo->id;

        $persona = new Persona();
        $persona->codigo              = $request->codigo;
        $persona->oficina_id          = $request->oficina_id;
        $persona->cedula              = $request->cedula;
        $persona->nombres             = $request->nombres;
        $persona->apellidos           = $request->apellidos;
        $persona->telefono            = $request->telefono;
        $persona->fecha_nacimiento    = $request->fecha_nacimiento;
        $persona->direccion           = $request->direccion;
        $persona->user_id             = $id_user;
        $persona->save();

        Flash::success('Se ha registrado a la Persona '. $persona->codigo .' exitosamente!');

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $persona = Persona::find($id);

        return view('users.show')
                ->with('persona', $persona);
    }

    public function edit($id)
    {
        $persona = Persona::find($id);

        if ($persona->user->id == '1' && $persona->user->perfil->nombre == 'Administrador') {

            Flash::success('El usuario Administrador no puede ser Modificado!');

            return redirect()->route('users.index');
        }else{

            $perfiles = Perfil::lists('nombre','id');
            $oficinas = Oficina::lists('nombre','id');

            return view('users.edit')
                ->with('persona', $persona)
                ->with('oficinas', $oficinas)
                ->with('perfiles', $perfiles);
        }
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $persona = Persona::find($id);

        if ($persona->user->id == '1' && $persona->user->perfil->nombre == 'Administrador') {

            Flash::success('El usuario Administrador no puede ser Modificado!');

            return redirect()->route('users.index');
        }else{

            $id_user = $persona->user->id;

            $user = User::find($id_user);
            $user->perfil_id = $request->perfil_id;
            $user->email     = $request->email;
            $user->save();

            $persona->oficina_id          = $request->oficina_id;
            $persona->cedula              = $request->cedula;
            $persona->nombres             = $request->nombres;
            $persona->apellidos           = $request->apellidos;
            $persona->telefono            = $request->telefono;
            $persona->fecha_nacimiento    = $request->fecha_nacimiento;
            $persona->direccion           = $request->direccion;
            $persona->save();

            Flash::success('Se ha actualizado la persona '. $persona->codigo .' exitosamente!');

            return redirect()->route('users.index');
        }
    }

    public function delete($id)
    {
        $persona = Persona::find($id);

        if ($persona->user->id == '1' && $persona->user->perfil->nombre == 'Administrador') {

            Flash::success('El usuario Administrador no puede ser Eliminado!');

            return redirect()->route('users.index');
        }else{

            $id_user = $persona->user->id;
            $user = User::find($id_user);

            $persona->delete();
            $user->delete();

            Flash::success('Se ha eliminado al Usuario exitosamente!');

            return back();
        }
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cedula'                => 'required|numeric|unique:personas',
            'email'                 => 'required|email|unique:users',
            'nombres'               => 'required',
            'apellidos'             => 'required',
            'telefono'              => 'required',
            'fecha_nacimiento'      => 'required',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'direccion'             => 'required'
        ];
    }
}
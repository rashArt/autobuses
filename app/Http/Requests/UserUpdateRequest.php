<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdateRequest extends Request
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

            'cedula'                => 'required|numeric',
            'email'                 => 'required|email',
            'nombres'               => 'required',
            'apellidos'             => 'required',
            'telefono'              => 'required',
            'fecha_nacimiento'      => 'required',
            'direccion'             => 'required'
        ];
    }
}
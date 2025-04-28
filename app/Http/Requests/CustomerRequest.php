<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return   [ 
                'placa' => 'required',
                'marca' => 'required',
                'modelo' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'nro_doc' => 'required',
                'correo' => 'email', 
                'telefono' => 'required',
            ];
    }
    
    public function messages()
    {
        return [
            'placa.required' => 'Debe de ingresar la placa',
            'marca.required'  => 'Debe ingresar la marca',
            'modelo.required' => 'Debe de ingresar el modelo',
            'nombre.required'  => 'Debe ingresar el nombre',
            'apellido.required'  => 'Debe ingresar el apellido',
            'nro_doc.required'  => 'Debe ingresar el número de documento',
            'correo.email' => 'Debe de ingresar el correo correctamente',
            'telefono.required'  => 'Debe ingresar el teléfono',
        ];
    }
    

}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ComprobarDni;

class EmpleadosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required | min:3 | max:50',
        	'apellidos' => 'required | min:5 | max:100',
			'direccion' => 'required | min:5 | max:100',
			'dni' => [new ComprobarDni, 'required', 'string', 'max:100'],
			'telefono' => 'required | min:7 | max:50',
			'foto' => 'dimensions:min_width=160,min_height=160|dimensions:max_width=1200,max_height=1200|max:2000',
        ];
    }
}

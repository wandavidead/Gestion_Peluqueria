<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
            'denominacion_producto' => 'required | max:50',
        	'marca' => 'required|max:100',
			'precio' => 'required|between:0,99,159.99',
			'cantidad' => 'required|numeric|max:1000',
			'foto' => 'dimensions:min_width=300,min_height=300,max_width=1200,max_height=1200',
			
        ];
    }
}

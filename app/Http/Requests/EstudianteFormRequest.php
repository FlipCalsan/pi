<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteFormRequest extends FormRequest
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
            'identificacion'=>'required',
            'nombres'=>'required',
            'primer_apellido'=>'required',
            'fecha_nacimiento'=>'required',
            'edad'=>'required',
        ];
    }

    public function messages(){
        return [
        'identificacion.required' => 'El número de documento es un campo requerido',
        'nombres.required' => 'El nombre es un campo requerido',
        'primer_apellido.required' => 'El primer apellido es un campo requerido',
        'fecha_nacimiento.required' => 'La fecha de nacimiento un campo requerido',
        'edad.required' => 'La edad es un campo requerido',
        ];
    }
}

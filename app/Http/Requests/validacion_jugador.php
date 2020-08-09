<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacion_jugador extends FormRequest
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
            //
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u',
            'apellido'=>'required|regex:/^[\pL\s\-]+$/u',
            'edad'=>'required|numeric|integer|digits_between:1,2',
            'documento'=>'required|numeric|digits_between:6,8'
        ];
    }
}

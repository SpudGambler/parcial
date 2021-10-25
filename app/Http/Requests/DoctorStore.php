<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStore extends FormRequest
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
            'rut' => 'required | min:3 | max: 20',
            'doctor_names' => 'required | min:3 | max: 20',
            'doctor_lastnames' => 'required | min:3 | max: 20',
            'email' => 'required | min:3 | max: 60',
            'direccion' => 'required | min:3 | max: 20',
            'especialidad' => 'required'
        ];
    }
}

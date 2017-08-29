<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class Animal_RegistrationRequest extends FormRequest
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
            'reg_animal_id' => 'required',
            'reg_animal_name' => 'required',
            'reg_animal_species' => 'required',
            'reg_animal_breed' => 'required',
            'reg_animal_age' => 'required',
            'reg_animal_gender' => 'required',
            'reg_animal_color' => 'required',
            'animal_owner' => 'required',
        ];
    }
}

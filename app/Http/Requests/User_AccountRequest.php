<?php

namespace Aop\Http\Requests;

use App\Http\Requests\Request;

//use Illuminate\Foundation\Http\FormRequest;

class User_AccountRequest extends Request
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
            'user_id' => 'required',
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'contact_no' => 'required'
        ];
    }
}

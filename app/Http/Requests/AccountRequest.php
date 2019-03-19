<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'FirstName'        => 'required|max:20',
            'LastName'         => 'required|max:20',
            'UserName'         =>'required|unique:accounts,username',
            'Email'            =>'required|email|unique:accounts,email',
            'Dob'              =>'required',
            'Password'         =>'required|min:8|max:50',
            'ConfirmPassword'  =>'required|same:Password',

        ];
    }
    public function messages()
    {
        return [
            'firstname.required'    => 'You must fill up this field',
            'lastname.required'     => 'You must fill up this field',
            'username.required'     => 'You must fill up this field',
            'username.unique'       => 'username must be unique',
            'email.required'        => 'You must fill up this field',
            'email.unique'          => 'Email must be unique',
            'password.required'     => 'You must fill up this field',
            'ConfirmPassword.same'  => 'Password and Confirm Password Must Be same',

        ];
    }
}

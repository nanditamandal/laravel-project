<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customerRequest extends FormRequest
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
          
            'firstname' => 'bail|required|regex:/^[A-Za-z]+$/u|min:5|max:10',
            'lastname' => 'bail|required|regex:/^[A-Za-z]+$/u|min:5|max:10',
            'password' => 'bail|required|min:5',
            'email'=> 'bail|required|email|max:255',
            'mobile'=>'required',
            'address'=>'required'
        ];
        
    }

    public function messages()
    {
        return [
                 
                 'required'=>'The :attribute field can not be empty',
                 'min'=>'The :attribute field must be at least 5 characters or more !!!',
                 'max'=>'The :attribute field must be 10 characters or more !!!',
                 'email'=> 'example@exm.com'
        ];
    }    
}

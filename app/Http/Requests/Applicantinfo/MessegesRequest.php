<?php

namespace App\Http\Requests\Applicantinfo;

use Illuminate\Foundation\Http\FormRequest;

class MessegesRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'name_user'=>'required',
            'email'    =>'required','string','email', 'max:255',
            'subject'  =>'required',
            'message'  =>'required'
        ];
    }
}

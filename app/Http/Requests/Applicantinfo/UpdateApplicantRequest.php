<?php

namespace App\Http\Requests\Applicantinfo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplicantRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'assigned' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'assigned.required'=>'Company Name is required',
        ];
    }
}

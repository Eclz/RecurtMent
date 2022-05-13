<?php

namespace App\Http\Requests\Applicantinfo;

use Illuminate\Foundation\Http\FormRequest;

class AdminApplicantRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}

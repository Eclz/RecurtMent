<?php

namespace App\Http\Requests\Applicantinfo;

use Illuminate\Foundation\Http\FormRequest;

class UserApplicantRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            // 'name'=>'required',
            'full_name'=>'required',
            'address'=>'required',
            'job_category'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'attach_cv'=>'required',
            'study_area'=>'required',
            'employer'=>'required',
            'job_title'=>'required',
            'start'=>'required',
            'end'=>'required',
            'note'=>'required',
            'skill'=>'required',
            'name1'=>'required',
            'phone1'=>'required',
        ];
    }
}

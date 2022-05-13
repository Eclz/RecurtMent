<?php

namespace App\Http\Requests\Companynfo;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required|unique:companies,name',
            'phonenumber'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:18',
            'location'=>'required',
            'address'=>'required',
        ];
    }
}

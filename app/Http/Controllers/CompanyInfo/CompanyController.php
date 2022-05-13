<?php

namespace App\Http\Controllers\CompanyInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Companynfo\CompanyRequest;
use App\Http\Requests\Companynfo\UpdateCompanyRequest;
use App\Models\CompanyInfo\Company;

class CompanyController extends Controller
{
    public function index()
    {

        return view('Main.Admin.company',[
            'company' =>Company::select(['id','name','phone_number','location','address','applicants'])
                                  ->paginate(10),
        ]);
    }

    public function Store(CompanyRequest $request)
    {
        
        Company::Create([
            'name'         =>$request->name,
            'phone_number' =>$request->phonenumber,
            'location'     =>$request->location,
            'address'      =>$request->address,
        ]);

        return response()->json(['code'=>200]);
    }

    public function update(UpdateCompanyRequest $request, $id)
    {
        
        $user = Company::findOrFail(intval($id));
        $user->update([
            'name'         =>$request->name,
            'phone_number' =>$request->phonenumber,
            'location'     =>$request->location,
            'address'      =>$request->address,
            'applicants'   =>$request->applicants,
        ]);

        return response()->json(['code'=>200]);
    }

  
    public function destroy($id)
    {
        $applicant = Company::find($id)->delete();
        return response()->json(['code'=>200]);
    }
}

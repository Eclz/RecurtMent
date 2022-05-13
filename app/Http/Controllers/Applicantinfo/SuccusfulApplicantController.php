<?php

namespace App\Http\Controllers\Applicantinfo;

use App\Http\Controllers\Controller;
use App\Models\Applicantinfo\Applicant;
use App\Models\CompanyInfo\Company;
use Illuminate\Http\Request;

class SuccusfulApplicantController extends Controller
{
    public function index(Request $request)
    {

        if( $_SERVER['REQUEST_METHOD'] === 'POST'){
            $app = Applicant::where('full_name', 'LIKE', '%'.$request->search.'%')
            ->orwhere('job_category', 'LIKE', '%'.$request->search.'%')
            ->orwhere('study_area', 'LIKE', '%'.$request->search.'%')
            ->orwhere('address', 'LIKE', '%'.$request->search.'%')
            ->orwhere('phone', 'LIKE', '%'.$request->search.'%')
            ->whereNotNull('company_assigned')
            ->paginate(10);
        }else{
            $app = Applicant::whereNotNull('company_assigned')
            ->paginate(10);
        }

        return view('Main.Admin.admited',[
            'company'   =>Company::select(['id','name'])
                              ->get(),
            'applicant' =>$app
        ]);
    }

}

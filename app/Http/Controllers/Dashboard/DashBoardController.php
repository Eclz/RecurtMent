<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicantinfo\Applicant;
use App\Models\CompanyInfo\Company;

class DashBoardController extends Controller
{
    public function index(){

        $applicant = Applicant::whereNull('company_assigned')
                               ->latest()
                               ->take(5)
                               ->get();

        
        return view('Main.Admin.index',[
            'applicants' => Applicant::whereNull('company_assigned')->count(),
            'succesful_applicants' => Applicant::whereNotNull('company_assigned')->count(),
            'company' =>Company::count(),
            'latest' => $applicant
        ]);
     }


     public function reset(){
         return view('Main.Admin.reset');
     }
}

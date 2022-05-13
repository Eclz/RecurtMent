<?php

namespace App\Http\Controllers\Applicantinfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Applicantinfo\UpdateApplicantRequest;
use App\Models\Applicantinfo\Applicant;
use App\Models\CompanyInfo\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
   
    public function index(Request $request)
    {

        if( $_SERVER['REQUEST_METHOD'] === 'POST'){
             $app = Applicant::where('full_name', 'LIKE', '%'.$request->search.'%')
             ->orwhere('job_category', 'LIKE', '%'.$request->search.'%')
             ->orwhere('study_area', 'LIKE', '%'.$request->search.'%')
             ->orwhere('address', 'LIKE', '%'.$request->search.'%')
             ->orwhere('phone', 'LIKE', '%'.$request->search.'%')
             ->whereNull('company_assigned')
             ->paginate(10);
        }else{
            $app = Applicant::whereNull('company_assigned')
            ->paginate(10);
        }

        return view('Main.Admin.applicants',[
            'company'   =>Company::select(['id','name'])
                              ->get(),
            'applicant' =>$app,
        ]);
    }

    public function update(UpdateApplicantRequest $request)
    {
        
        $user = Applicant::findOrFail(intval($request->user_id));
        $user->update([
            'company_assigned'=>$request->assigned,
        ]);

        DB::table('companies')
          ->where('name',$request->assigned)
          ->increment('applicants',1);

        return response()->json(['code'=>200]);
    }

  
    public function destroy($id)
    {

        Applicant::findOrFail(intval($id))->delete();
        return response()->json(['code'=>200]);
    }


}

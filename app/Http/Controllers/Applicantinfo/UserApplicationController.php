<?php

namespace App\Http\Controllers\Applicantinfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Applicantinfo\UserApplicantRequest;
use App\Http\Requests\Applicantinfo\MessegesRequest;
use App\Models\Applicantinfo\Applicant;
use App\Models\Messege\Messege;


class UserApplicationController extends Controller
{
    public function index(){
       return view('Main.Normal.index');
    }

    public function AboutUs(){
        return view('Main.Normal.aboutus');
    }

    public function contact(){
        return view('Main.Normal.contact');
    }

    public function apply(){
        return view('Main.Normal.forms');
    }

    public function store(UserApplicantRequest $request){


        if ($request->file('attach_cv')) {
            $imagePath = $request->file('attach_cv');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('attach_cv')->storeAs('uploads', $imageName);
        }

        
        Applicant::Create([
            'name'        =>$request->name,
            'full_name'   =>$request->full_name,
            'address'     =>$request->address,
            'job_category'=>$request->address,
            'phone'       =>$request->phone,
            'city'        =>$request->city,
            'attach_cv'   =>$imageName,
            'study_area'  =>$request->study_area,
            'employer'    =>$request->employer,
            'job_title'   =>$request->job_title,
            'start'       =>$request->start,
            'end'         =>$request->end,
            'note'        =>$request->note,
            'skill'       =>$request->skill,
            'name1'       =>$request->name1,
            'phone1'      =>$request->phone1,
            'name2'       =>$request->name2,
            'phone2'      =>$request->phone2,
            'name3'       =>$request->name3,
            'phone3'      =>$request->phone3,
            'path'        =>$path,
            'name'        =>$imageName
        ]);

        return response()->json(['code'=>200], 200);

    
    }


    public function messege(MessegesRequest $request){
      
        Messege::Create([
            'name_user'=>$request->name_user,
            'email'    =>$request->email,
            'status'   =>0,
            'subject'  =>$request->subject,
            'message'  =>$request->message,
        ]);

        return response()->json(['code'=>200]);
    }
}

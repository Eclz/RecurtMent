<?php

namespace App\Providers;
use App\Models\Applicantinfo\Applicant;
use App\Models\Messege\Messege;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {

    }

    public function boot()
    {
       
        View::share([
            'unsuccusfull'=>Applicant::whereNull('company_assigned')
            ->count(),
            'succusfull' =>Applicant::whereNotNull('company_assigned')
            ->count(),
            'messege'    =>Messege::where('status',0)->count(),
        ]);
    }
}

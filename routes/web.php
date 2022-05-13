<?php

use App\Http\Controllers\Applicantinfo\ApplicantController;
use App\Http\Controllers\Applicantinfo\SuccusfulApplicantController;
use App\Http\Controllers\Applicantinfo\UserApplicationController;
use App\Http\Controllers\CompanyInfo\CompanyController;
use App\Http\Controllers\Dashboard\DashBoardController;
use App\Http\Controllers\Messege\MessegeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/',[UserApplicationController::class,'index'])
      ->name('Home');

Route::get('about-us',[UserApplicationController::class,'AboutUs'])
      ->name('AboutUs');

Route::get('contact',[UserApplicationController::class,'contact'])
      ->name('Contact');

Route::get('application',[UserApplicationController::class,'apply'])
      ->name('Application');

Route::post('save',[UserApplicationController::class,'store'])
      ->name('Save');

Route::post('messege',[UserApplicationController::class,'messege'])
       ->name('Messege');




Route::group(['middleware' => 'prevent-back-history'],function(){

      Route::group(['middleware' => 'auth:sanctum'], function () {


            Route::get('dashboard',[DashBoardController::class,'index'])
            ->name('Dashbord');

            //Reset

            Route::get('change_password',[DashBoardController::class,'reset'])
                  ->name('Reset');

            //Companies

            Route::get('company',[CompanyController::class,'index'])
                  ->name('Company');

            Route::post('add-company',[CompanyController::class,'store'])
            ->name('AddCompany');

            Route::put('update-company/{id}',[CompanyController::class,'update'])
            ->name('UpdateCompany');

            Route::delete('delete-company/{id}',[CompanyController::class,'destroy'])
            ->name('Destroy');

            //Applications


            Route::match(['get', 'post'],'applicant',[ApplicantController::class,'index'])
             ->name('Apply');


            Route::post('update-applicant',[ApplicantController::class,'update'])
            ->name('UpdateCompany');

            Route::delete('delete-applicant/{id}',[ApplicantController::class,'destroy'])
            ->name('Destroy');

            Route::get('/download/{file}', function ($file) {
                  return response()->download(storage_path('app/uploads/'.$file))
                  ; 
            });

            //Applications

            Route::match(['get', 'post'],'succus-applicant',[SuccusfulApplicantController::class,'index'])
                  ->name('succes');

            //Messeges

             
            Route::match(['get', 'post'],'messeges-admin',[MessegeController::class,'index'])
                 ->name('Messeges');

            Route::delete('delete-messeges/{id}',[MessegeController::class,'destroy'])
                 ->name('Destroy');

            Route::put('update-message/{id}',[MessegeController::class,'update'])
                 ->name('updatemessage');



                   

      });

	Auth::routes(['register' => false]);
});




<?php

namespace App\Models\Applicantinfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'full_name',
        'address',
        'job_category',
        'phone',
        'city',
        'attach_cv',
        'study_area',
        'employer',
        'job_title',
        'start',
        'end',
        'note',
        'skill',
        'name1',
        'phone1',
        'name2',
        'phone2',
        'name3',
        'phone3',
        'company_assigned',
        'path'
    ];
}
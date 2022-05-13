<?php

namespace App\Models\CompanyInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
          'name',
          'location',
          'phone_number',
          'applicants',
          'address'
    ];
}
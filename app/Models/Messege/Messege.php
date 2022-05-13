<?php

namespace App\Models\Messege;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messege extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_user',
        'email',
        'status',
        'subject',
        'message'
    ];
}

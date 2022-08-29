<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCreateUserFormField extends Model
{
    protected $fillable = [
        'UserType',
        'Fname',
        'Lname',
        'PersonnelCode',
        'MobileNumber',
        'LocalNumber',
        'Branch',
        'Unit',
        'Post',
    ];
}
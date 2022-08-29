<?php

namespace App\Http\Controllers;

use App\Models\AdminCreateUserFormField;
use Illuminate\Http\Request;

class adminSectionPageLoader extends Controller
{
    //this is controller for admin seciton of application. for determine permissions of users, editing system user form
    //fields for adding new user, and ...


    public function createNewUser()
    {
        $formFields = AdminCreateUserFormField::all();
    }
}
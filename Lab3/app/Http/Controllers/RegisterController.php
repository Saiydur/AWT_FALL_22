<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function getRegisterPage(){
        return view("register",[
            "fname"=>"Saiydur",
            "lname"=>"Rahman",
            "age"=> 25,
            "email"=>"saiydur@gmail.com"
        ]);
    }
}

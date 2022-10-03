<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function getRegisterPage($name="NULL"){
        return view("register",[
            "fname"=>$name,
            "lname"=>"Rahman",
            "age"=> 25,
        ])->with("mobile","01999")
        ->with("email","saiydur@gmail.com");
    }

    function getLoginPage($name="NULL"){
        return view("login")->with("name",$name);
    }
}

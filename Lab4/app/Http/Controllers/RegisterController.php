<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function GetRegisterPage()
    {
        return view("register");
    }

    public function RegisterUser(Request $request){
        $this->validate($request,
        [
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required|min:6|confirmed",
            "confirm_password"=>"required|min:6",
            "age"=> "required|value:14|digits_between:0,9"
        ],
        [
            "name.required"=>"Name is required",
            "email.required"=>"Email is required",
            "email.email"=>"Email is invalid",
            "password.required"=>"Password is required",
            "password.min"=>"Password must be at least 6 characters",
            "password.confirmed"=>"Password and confirm password must be same",
            "confirm_password.required"=>"Confirm password is required",
            "confirm_password.min"=>"Confirm password must be at least 6 characters",
            "age.required"=>"Age is required",
            "age.value"=>"Age must be 14 or above"
        ]);
        dd($request->all());
    }
}

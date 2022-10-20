<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistration;
use App\Models\RegistrationUserModel;
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
            "password"=>"required|min:6",
        ],
        [
            "name.required"=>"Name is required",
            "email.required"=>"Email is required",
            "email.email"=>"Email is invalid",
            "password.required"=>"Password is required",
            "password.min"=>"Password must be at least 6 characters",
        ]);
        $user = new RegistrationUserModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->age = (int)$request->age;
        $user->save();
        return redirect()->route("index");
    }

    public function GetLoginUser(Request $request){
        $user = RegistrationUserModel::where("email",$request->email)->first();
        if($user){
            if(password_verify($request->password,$user->password)){
                dd("Login Success");
            }
            else{
                dd("Password Wrong");
            }
        }
        else{
            dd("User Not Found");
        }
    }

    public function GetLoginUserPage(){
        return view("login");
    }
}

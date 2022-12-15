<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CreatorController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => "required|email|unique:creators",
            "password" => "required|min:8",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" => "Validation failed",
                "errors" => $validator->errors(),
            ], 400);
        }

        $creator = Creator::create([
            "email" => $request->email,
            "password" => $request->password,
        ]);
        $isMailSent = $this->verifyEmail($request->email);
        if ($isMailSent) {
            return response()->json([
                "message" => "Verification Link Sent To Your Email",
            ], 201);
        } else {
            return response()->json([
                "message" => "Account Creation Failed",
            ], 500);
        }
    }

    public function verifyEmail($email)
    {
        $creator = Creator::where("email", $email)->first();
        $data = array("name" => "Omuk","url"=>"http://localhost:8000/api/creator/verify-email/$email");
        if ($creator) {
            Mail::send('email', $data, function ($message) use ($email,$creator) {
                $message->to($email,"Omuk");
                $message->subject('Subject');
            });
            return true;
        } else {
            return false;
        }
    }

    public function verifyEmailLink($email)
    {
        $creator = Creator::where("email", $email)->first();
        if ($creator) {
            $creator->is_verified = true;
            $creator->save();
            return response()->json([
                "message" => "Email Verified",
            ], 200);
        } else {
            return response()->json([
                "message" => "Email Verification Failed",
            ], 500);
        }
    }
}

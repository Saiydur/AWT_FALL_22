<?php

namespace App\Http\Controllers;

use App\Models\InterviewerModel;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class InterviewerController extends Controller
{
    public function get()
    {

        return view('showRegisteredInterviewer');
    }


    public function getInterviewers()
    {
        return InterviewerModel::all();
    }

    public function showcreateInterviewerForm()
    {

        return view('createInterviewerProfile');
    }

    public function showupdateInterviewerForm($id = null)
    {
        $interviewer = new InterviewerModel();

        $umodel = $interviewer->where('id', $id)->first();

        return view('updateInterviewerProfile', ['val' => $umodel]);
    }


    public function deleteInterviewerProfile($id = null)
    {

        // dd($id);
        $list = new InterviewerModel();

        $interviewer = $list->where('id', $id)->first();
        $interviewer->delete();

        return response()->json(['msg' => 'Interviewer #' . $id . 'deleted sucessfully']);
    }

    public function createInterviewerProfile(Request $req)
    {

        $interviewer = new InterviewerModel();
        $interviewer->uname = $req->uname;
        $interviewer->email = $req->mail;
        $interviewer->password = $req->pass;

        $interviewer->save();


        return response()->json(['msg' => ' Interviewer profile created sucessfully']);
    }

    public function updateInterviewerProfile(Request $req, $id = null)
    {

        $interviewer = new InterviewerModel();

        $umodel = $interviewer->where('id', $id)->first();

        $umodel->uname = $req->uname;
        $umodel->email = $req->mail;
        $umodel->password = $req->pass;


        $umodel->save();

        return response()->json(['msg' => ' Interviewer #' . $id . ' profile updated sucessfully']);
    }

    public function showUserList()
    {

        return view('users');
    }

    public function getUsersList()
    {
        return UserModel::all();
    }
}

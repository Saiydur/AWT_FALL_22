<?php

use App\Http\Controllers\InterviewerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//get request
Route::get('/getInterviewersList', [InterviewerController::class, 'getInterviewers']);
Route::get('/getusersList', [InterviewerController::class, 'getUsersList']);
Route::get('/deleteInterviewer-{id}', [InterviewerController::class, 'deleteInterviewerProfile']);


//post request

Route::post('/createInterviewerAccount', [InterviewerController::class, 'createInterviewerProfile']);
Route::post('/updateInterviewerAccount-{id}', [InterviewerController::class, 'updateInterviewerProfile']);

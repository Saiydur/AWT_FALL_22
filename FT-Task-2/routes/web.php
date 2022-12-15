<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InterviewerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InterviewerController::class, 'get']);
Route::get('/createInterviewProfile', [InterviewerController::class, 'showcreateInterviewerForm']);
Route::get('/updateInterviewProfile-{id}', [InterviewerController::class, 'showupdateInterviewerForm']);
Route::get('/users', [InterviewerController::class, 'showUserList']);




// Route::get('/register', [RegistrationController::class, 'getForm'])->middleware('checkLogout')->middleware('preventBackLogout');
// Route::post('/register', [RegistrationController::class, 'signUp'])->middleware('checkLogout')->middleware('preventBackLogout');
// Route::get('/login', [LoginController::class, 'getForm'])->middleware('checkLogout')->middleware('preventBackLogout');
// Route::post('/login', [LoginController::class, 'signIn'])->middleware('checkLogout')->middleware('preventBackLogout');
// Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('checkLogin')->middleware('preventBackLogout');
// Route::get('/profile', [ProfileController::class, 'show'])->middleware('checkLogin')->middleware('preventBackLogout');

// // Route::post('/updateprofile', [RegistrationController::class, 'signUp']);
// Route::get('/updateprofile', [ProfileController::class, 'updateProfile'])->middleware('checkLogin')->middleware('preventBackLogout');
// Route::get('/logout', [LoginController::class, 'logOut'])->middleware('preventBackLogout');
// Route::post('/updateprofile', [ProfileController::class, 'update'])->middleware('checkLogin')->middleware('preventBackLogout');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\OpaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Group Middleware
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 
    'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 
    'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 
    'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 
    'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 
    'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 
    'AdminUpdatePassword'])->name('admin.update.password');

});// End Group Admin Middleware

//Student Group Middleware
Route::middleware(['auth','role:student'])->group(function(){
    
    Route::get('/student/dashboard', [studentController::class, 
    'StudentDashboard'])->name('student.dashboard');

    Route::get('/student/logout', [studentController::class, 
    'StudentLogout'])->name('student.logout');

    Route::get('/student/profile', [studentController::class, 
    'StudentProfile'])->name('student.profile');

    Route::get('/student/apply', [studentController::class, 
    'StudentApply'])->name('student.apply');
    
    Route::get('/student/applystatus', [studentController::class,     
    'StudentStatus'])->name('student.status');

    Route::get('/student/who_may_apply', [studentController::class, 
    'StudentWho_may_apply'])->name('student.who_may_apply');

    Route::get('/student/additional_req', [studentController::class, 
    'StudentAdditional_req'])->name('student.additional_req');

    Route::post('/student/profile/store', [studentController::class, 
    'studentProfileStore'])->name('student.profile.store');

    Route::post('/upload/file', [studentController::class, 
    'uploadFile'])->name('upload.file');

    Route::get('/student/change/password', [studentController::class, 
    'StudentChangePassword'])->name('student.change.password');

    Route::post('/student/update/password', [studentController::class, 
    'StudentUpdatePassword'])->name('student.update.password');
   
    


});// End Group Student Middleware



//Agent Group Middleware
Route::middleware(['auth','role:agent'])->group(function(){

    Route::get('/agent/dashboard', [AgentController::class, 
    'AgentDashboard'])->name('agent.dashboard');

    Route::get('/agent/logout', [AgentController::class, 
    'AgentLogout'])->name('agent.logout');

});// End Group Agent Middleware

Route::middleware(['auth','role:opa'])->group(function(){

    Route::get('/opa/dashboard', [OpaController::class, 
    'OpaDashboard'])->name('opa.dashboard');

    Route::get('/opa/logout', [opaController::class, 
    'OpaLogout'])->name('opa.logout');

});



Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::get('/agent/login', [AgentController::class, 'AgentLogin'])->name('agent.login');

Route::get('/student/login', [studentController::class, 'StudentLogin'])->name('student.login');

Route::get('/opa/login', [opaController::class, 'OpaLogin'])->name('opa.login');




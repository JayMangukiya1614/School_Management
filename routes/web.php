<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Schoolcontroller;

//  admin profile controller 

use App\Http\Controllers\Profilecontroller;


// Admin controller 
use App\Http\Controllers\Admincontroller;



// setup profile controller 
use App\Http\Controllers\Classcontroller;
use App\Http\Controllers\Yearcontroller;
use App\Http\Controllers\Subjectcontroller;

// marks entry 
use App\Http\Controllers\Mentrycontroller;

// marks grade  
use App\Http\Controllers\Mgradecontroller;

// student management
use App\Http\Controllers\StudentMcontroller;

// result controller  
use App\Http\Controllers\Resultcontroller;

// fronted 
use App\Http\Controllers\Frontedcontroller;


// attendance controller 

use App\Http\Controllers\Attendancecontroller;

// google facebook gihub login controller 

use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('index');
// });

// student leanding page 

Route::get('/', [Frontedcontroller::class, 'Sindex'])->name('Sindex');
Route::get('Sloginuser', [Frontedcontroller::class, 'Sloginuser'])->name('Sloginuser');
Route::get('Slogin', [Frontedcontroller::class, 'Slogin'])->name('Slogin');
Route::get('Sabout', [Frontedcontroller::class, 'Sabout'])->name('Sabout');
Route::get('Scourse', [Frontedcontroller::class, 'Scourse'])->name('Scourse');
Route::get('Sevent', [Frontedcontroller::class, 'Sevent'])->name('Sevent');
Route::get('Strainer', [Frontedcontroller::class, 'Strainer'])->name('Strainer');
Route::get('Scontact', [Frontedcontroller::class, 'Scontact'])->name('Scontact');
// student reg save 
Route::get('Sreg', [Frontedcontroller::class, 'Sreg'])->name('Sreg');
Route::post('regsave', [Frontedcontroller::class, 'regsave'])->name('regsave');



// student middleware 

Route::group(['middleware'  => ['Slogink']], function () {
    Route::get('Sprofile', [Frontedcontroller::class, 'Sprofile'])->name('Sprofile');
    Route::get('Slogout', [Frontedcontroller::class, 'Slogout'])->name('Slogout');
    Route::get('SCpassword', [Frontedcontroller::class, 'SCpassword'])->name('SCpassword');
    Route::get('SupdateP', [Frontedcontroller::class, 'SupdateP'])->name('SupdateP');
    Route::get('Seditprofile{id}', [Frontedcontroller::class, 'Seditprofile'])->name('Seditprofile');
    Route::get('Fpassword', [Frontedcontroller::class, 'Fpassword'])->name('Fpassword');
    Route::get('U/password', [Frontedcontroller::class, 'Upassword'])->name('Upassword');
    Route::get('Sresult', [Frontedcontroller::class, 'Sresult'])->name('Sresult');




    Route::get('Sid', [Frontedcontroller::class, 'Sid'])->name('Sid');
    Route::post('ScheckId', [Frontedcontroller::class, 'ScheckId'])->name('ScheckId');
    Route::get('Sidcard', [Frontedcontroller::class, 'Sidcard'])->name('Sidcard');
});

// admin  

Route::get('admin_login', [Admincontroller::class, 'admin_login'])->name('admin_login');
Route::get('admin_loginuser', [Admincontroller::class, 'admin_loginuser'])->name('admin_loginuser');
Route::get('admin_registration', [Admincontroller::class, 'admin_registration'])->name('admin_registration');

// group middleware 

Route::group(['middleware' => ['logink']], function () {

    Route::get('index', [Schoolcontroller::class, 'index'])->name('index');


    // reult 
    Route::get('result', [Resultcontroller::class, 'result'])->name('result');
    Route::get('saveresult', [Resultcontroller::class, 'saveresult'])->name('saveresult');
    Route::get('checkresult', [Resultcontroller::class, 'checkresult'])->name('checkresult');


    // profile controller  

    Route::get('Adprofile', [Profilecontroller::class, 'profile'])->name('Adprofile');
    Route::get('delete{id}', [Profilecontroller::class, 'delete'])->name('delete');
    Route::get('edit_profile{id}', [Profilecontroller::class, 'edit_profile'])->name('edit_profile');
    Route::get('profileupdatesave/{id}', [Profilecontroller::class, 'profileupdatesave'])->name('profileupdatesave');
    Route::get('editpassword', [Profilecontroller::class, 'editpassword'])->name('editpassword');
    Route::get('updatepassword', [Profilecontroller::class, 'updatepassword'])->name('updatepassword');

    // attendance controller 
    Route::get('attendance', [Attendancecontroller::class, 'Sattendance'])->name('attendance');
    Route::get('atten', [Attendancecontroller::class, 'atten'])->name('atten');
    Route::get('attendancesheet', [Attendancecontroller::class, 'attendancesheet'])->name('attendancesheet');





    // admin controller 

    Route::get('admin_save', [Admincontroller::class, 'admin_save'])->name('admin_save');
    Route::get('admin_logout', [Admincontroller::class, 'admin_logout'])->name('admin_logout');
    Route::get('forgot_password', [Admincontroller::class, 'forgot_password'])->name('forgot_password');
    Route::get('forget_success', [Admincontroller::class, 'forget_success'])->name('forget_success');



    // class controller 
    Route::get('classtable', [Classcontroller::class, 'classtable'])->name('classtable');
    Route::get('classsave', [Classcontroller::class, 'classsave'])->name('classsave');
    Route::get('classupdate/{id}', [Classcontroller::class, 'classupdate'])->name('classupdate');
    Route::get('classupdatesave/{id}', [Classcontroller::class, 'classupdatesave'])->name('classupdatesave');
    Route::get('classdelete/{id}', [Classcontroller::class, 'classdelete'])->name('classdelete');


    // year controller 
    Route::get('year', [Yearcontroller::class, 'year'])->name('year');
    Route::get('yearsave', [Yearcontroller::class, 'yearsave'])->name('yearsave');
    Route::get('yearupdate/{id}', [Yearcontroller::class, 'yearupdate'])->name('yearupdate');
    Route::get('yearupdatesave/{id}', [Yearcontroller::class, 'yearupdatesave'])->name('yearupdatesave');
    Route::get('yeardelete/{id}', [Yearcontroller::class, 'yeardelete'])->name('yeardelete');





    // subject controller 

    Route::get('subject', [Subjectcontroller::class, 'subject'])->name('subject');
    Route::get('subjectsave', [Subjectcontroller::class, 'subjectsave'])->name('subjectsave');
    Route::get('subjectupdate/{id}', [Subjectcontroller::class, 'subjectupdate'])->name('subjectupdate');
    Route::get('subjectupdatesave/{id}', [Subjectcontroller::class, 'subjectupdatesave'])->name('subjectupdatesave');
    Route::get('subjectdelete/{id}', [Subjectcontroller::class, 'subjectdelete'])->name('subjectdelete');

    // marks entry

    Route::get('marksentry', [Mentrycontroller::class, 'marksentry'])->name('marksentry');
    Route::get('markssave', [Mentrycontroller::class, 'markssave'])->name('markssave');
    Route::get('markupdate{id}', [Mentrycontroller::class, 'markupdate'])->name('markupdate');
    Route::get('markupdatesave/{id}', [Mentrycontroller::class, 'markupdatesave'])->name('markupdatesave');
    Route::get('markdelete/{id}', [Mentrycontroller::class, 'markdelete'])->name('markdelete');





    // grade entry

    Route::get('marksgrade', [Mgradecontroller::class, 'marksgrade'])->name('marksgrade');
    Route::get('grade/save/data', [Mgradecontroller::class, 'gradesave'])->name('gradesave.data');
    Route::get('editgrade/{id}', [Mgradecontroller::class, 'editgrade'])->name('editgrade');
    Route::get('gradeupdatesave/{id}', [Mgradecontroller::class, 'gradeupdatesave'])->name('gradeupdatesave');
    Route::get('deletegrade/{id}', [Mgradecontroller::class, 'deletegrade'])->name('deletegrade');






    // Student Management 
    Route::get('student_registration', [StudentMcontroller::class, 'student_registration'])->name('student_registration');
    Route::post('student_registration_save', [StudentMcontroller::class, 'student_registration_save'])->name('student_registration_save');
    Route::get('SRupdate{id}', [StudentMcontroller::class, 'SRupdate'])->name('SRupdate');
    Route::get('updatesave{id}', [StudentMcontroller::class, 'updatesave'])->name('updatesave');
    Route::get('SRdelete{id}', [StudentMcontroller::class, 'SRdelete'])->name('SRdelete');
    Route::get('studentdetails', [StudentMcontroller::class, 'student_details'])->name('studentdetails');
    Route::get('searchstudent', [StudentMcontroller::class, 'searchstudent'])->name('searchstudent');




    // admin middleware end 



});
// Google Login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);


// Facebook Login
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCCallback']);



// Github Login
Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleFacebookCGithub']);



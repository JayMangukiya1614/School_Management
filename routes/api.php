<?php

use App\Http\Controllers\APIcontroller;
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

Route::get('/ApiDemo', [APIcontroller::class, 'Demo']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// class view 
Route::post('APIClass', [APIcontroller::class, 'APIclasstable']);

// class insert 
Route::post('APIcdata', [APIcontroller::class, 'APIclasssave']);

// class delete 
Route::post('del', [APIcontroller::class, 'APIDclassdelete']);

// class update 
Route::post('APICupdate', [APIcontroller::class, 'APIDclassupdate']);


// student details view          
Route::post('APISRdata', [APIcontroller::class, 'APIstudent_details']);

// student details insert        
Route::post('APIsdata', [APIcontroller::class, 'APIstudent_registration_save']);

// student delete 
Route::post('APISDdel', [APIcontroller::class, 'APIstudentdelete']);

// student update 
Route::post('APIstudentupdate', [APIcontroller::class, 'APIDstudentupdate']);


// year view 
Route::post('APIYdata', [APIcontroller::class, 'APIyear']);


// year insert 
Route::post('APIydata', [APIcontroller::class, 'APIyearsave']);

// year delete
Route::post('APIYdel', [APIcontroller::class, 'APIyeardelete']);

// year update 
Route::post('APIYupdate', [APIcontroller::class, 'APIDyearupdate']);


// subject view  
Route::post('APIsubject', [APIcontroller::class, 'APIsubject']);

// subject insert
Route::post('APIsubjectdata', [APIcontroller::class, 'APIsubjectsave']);

// subject  delete 
Route::post('APISdel', [APIcontroller::class, 'APIsubjectdelete']);

//  subject update 
Route::post('APIsubjectupdate', [APIcontroller::class, 'APIsubjectupdate']);



// marks view  
Route::post('APImarkse', [APIcontroller::class, 'APImarkse']);

// marks insert
Route::post('APImarkE', [APIcontroller::class, 'APImarkssave']);

// marks entry delete 
Route::post('APImedel', [APIcontroller::class, 'APIstmarksedelete']);

// marks entry update 
Route::post('APImarkeupdate', [APIcontroller::class, 'APIDmarkeupdate']);


// Grade view 
Route::post('APIgrade', [APIcontroller::class, 'APIgrade']);

// Grade insert
Route::post('APImsave', [APIcontroller::class, 'APIgradesave']);
// grade delete 
Route::post('APIgradedel', [APIcontroller::class, 'APIstgradedelete']);

//  grade update  
Route::post('APIgradeupdate', [APIcontroller::class, 'APIDgradeupdate']);


// admin view 
Route::post('APIadmin', [APIcontroller::class, 'APIadmin']);


// admin insert 
Route::post('APIA', [APIcontroller::class, 'APIadmininsert']);

// admin delete 
Route::post('APIadmindel', [APIcontroller::class, 'APIstadmindelete']);

// admin update   
Route::post('APIadminupdate', [APIcontroller::class, 'APIDadminupdate']);

// admin login 
Route::post('admin_login', [APIcontroller::class, 'APIlogin']);

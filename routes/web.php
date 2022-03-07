<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Models\School;
use App\Models\Student;
use App\Models\Classes;


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

Route::get('/', function () {
    return View::make('welcome');
});

Route::get('/school',[SchoolController::class,'index']);
Route::post('/school',[SchoolController::class,'storeSchool']);

Route::post('/student',[StudentController::class,'storeStudent']);
Route::get('/student',[StudentController::class,'index']);

Route::post('/class',[ClassController::class,'storeClass']);
Route::get('/class',[ClassController::class,'index']);




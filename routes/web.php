<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
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
Route::get('/school', function () {
    return View::make('school');
});
Route::get('/student', function () {
    return View::make('student');
});
Route::get('/class', function () {
    return View::make('class');
});

//Route::get('/showschool',[SchoolController::class,'showSchools']);

Route::post('/school',function(){
    $school = new School();
    $school->schName = request('schoolname');
    $school->address = request('address');
    $school->save();

    return redirect('/school');
});

Route::post('/student',function(){
    $student = new Student();
    $student->firstName = request('firstName');
    $student->lastName = request('lastName');
    $student->save();

    return redirect('/student');
});


Route::post('/class',function(){
    $class = new Classes();
    $class->schoolid = request('schoolid');
    $class->className = request('classname');
    $class->capacity = request('capacity');
    $class->type = request('type');
    $class->save();

    return redirect('/class');
});

 Route::get('/class',function(){
    $data = School::all();
    return view('/class',['schools'=>$data]);
});

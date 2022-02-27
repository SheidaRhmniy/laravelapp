<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Models\School;

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

Route::post('/school',function(){
    $school = new School();
    $school->schName = request('schoolname');
    $school->address = request('address');
    $school->save();

    return redirect('/school');
});

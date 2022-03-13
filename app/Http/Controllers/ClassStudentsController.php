<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\ClassStudents;
use App\Http\Requests\StoreClassStudentsRequest;

class ClassStudentsController extends Controller
{
    public function index(){
        $classes=Classes::all();
        $students=Student::all();
        return view('setgrade',compact(['classes','students']));
    }

    public function storeGrade(StoreClassStudentsRequest $request){
        $validate=$request->validated();
        ClassStudents::create($request->all());
         return back()->with('success', 'Your record has been inserted.');
        
    }
}

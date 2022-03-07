<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;


class StudentController extends Controller
{
    //
    public function index(){
        return view('student');
    }

    public function storeStudent(StoreStudentRequest $request){
        $vlaidatedData = $request->validated();
        Student::create($request->all());
        return back()->with('success','Your form has been submited!');
    }
}

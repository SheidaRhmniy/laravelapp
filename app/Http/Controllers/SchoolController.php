<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
use App\Models\Classes;

class SchoolController extends Controller
{
    // public function storeSchool(){
    //     $school = new School();
    //     $school->schName = request('schoolname');
    //     $school->address = request('address');
    //     $school->save();

    //     return redirect('/school');
    // }

    public function showSchools(){
        $data= school::all();
        return view('class',['schools'=>$data]);
    }
}

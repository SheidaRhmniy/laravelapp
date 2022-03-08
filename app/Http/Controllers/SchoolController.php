<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Http\Requests\StoreSchoolRequest;


class SchoolController extends Controller
{
    //show School view
    public function index(){
        return view('school');
    }
    
    // store school in database
     public function storeSchool(StoreSchoolRequest $request){
         $validatedData = $request->validated();
         School::create($request->all());
         return back()->with('success', 'Your form has been submitted.');
         
    }

    
}

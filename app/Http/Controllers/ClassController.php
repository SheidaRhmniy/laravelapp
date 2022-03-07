<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\School;
use App\Http\Requests\StoreClassRequest;

class ClassController extends Controller
{
    //
    public function index(){
        $data=School::all();
        return view('class',['schools'=>$data]);
    }

    public function storeClass(StoreClassRequest $request){
        $validatedData = $request->validated();
        Classes::create($request->all());
        return back()->with('success', 'Your form has been submitted.');
        
    }

    
}

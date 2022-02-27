<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;

class SchoolController extends Controller
{
    public function storeSchool(){
        return redirect('/');
    }
}

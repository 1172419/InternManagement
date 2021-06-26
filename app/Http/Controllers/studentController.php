<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
        $student = student::all();

        return view('index')->with('student',$student);
        // return $student;

    }
}

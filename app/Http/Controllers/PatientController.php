<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showIndex(){
        return view('patient.index');
    }
    public function showProfile(){
        return view('patient.profile');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showIndex(){
        $specialites = Specialite::all();
        return view('patient.index',compact('specialites'));
    }
    public function showProfile(){
        return view('patient.profile');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function showProfile(){
        return view('medecin.profile');
    }
}
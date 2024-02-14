<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Medecin;
class MedecinController extends Controller
{
    public function showIndex(){
        return view('medecin.index');
    }
    public function showProfile($id){
        $medecin = Medecin::findOrFail($id);
    return view('medecin.profile', ['medecin' => $medecin]);
    }
}

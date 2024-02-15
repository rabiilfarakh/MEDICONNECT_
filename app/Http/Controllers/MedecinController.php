<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Medecin;
use App\Models\Specialite;
class MedecinController extends Controller
{
    public function showIndex(){
        return view('medecin.index');
    }
    
    public function showProfile($id){
        $medecin = Medecin::findOrFail($id);
        $specialite = Specialite::findOrFail($medecin->specialite_id);
        return view('medecin.profile', compact('medecin','specialite'));
    }
    
}

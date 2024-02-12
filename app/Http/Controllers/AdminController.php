<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Medecin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medicament;
use App\Models\Specialite;
use App\Models\Patient;
use App\Models\Medecin as medecinModel;


class AdminController extends Controller
{
    public function showIndex(){
        $users = User::paginate(4);
        $medicaments = Medicament::paginate(4); 
        $countUsers = $users->total();
        $countMedicaments = $medicaments->total();
        $countSpecialites = Specialite::count();
        $countMedecin = medecinModel::count();
        $countPatient = Patient::count();
        return view('admin.index', compact('users', 'countUsers', 'medicaments', 'countMedicaments', 'countMedecin', 'countPatient', 'countSpecialites'));

    }
    


}

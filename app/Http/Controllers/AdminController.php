<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use App\Models\Medicament;

class AdminController extends Controller
{
    public function showIndex(){
        $users = User::paginate(4);
        $medicaments = Medicament::paginate(4); 
        $countUsers = $users->total();
        $countMedicaments = $medicaments->total();
        return view('admin.index', compact('users', 'countUsers', 'medicaments', 'countMedicaments'));
    }
    


}

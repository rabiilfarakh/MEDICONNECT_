<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class AdminController extends Controller
{
    public function showIndex(){
        $users = User::paginate(3);
        $countUsers = $users->total();
        return view('admin.index',compact('users','countUsers'));
    }


}

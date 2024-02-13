<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function destroy($id){
        $specialite = Specialite::findOrFail($id);
        $specialite->delete();

        return redirect()->route('admin.index');
    }
}

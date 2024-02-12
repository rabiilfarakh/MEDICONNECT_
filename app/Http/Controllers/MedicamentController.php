<?php

namespace App\Http\Controllers;
use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    public function destroy($id){
        $medicament = Medicament::findOrFail($id);
        $medicament->delete();

        return redirect()->route('admin.index');
    }
}

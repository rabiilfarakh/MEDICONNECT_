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

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        Specialite::create($validatedData);

        return redirect()->route('admin.index')
            ->with('success', 'Specilialite ajouté avec succès!');
    }
}

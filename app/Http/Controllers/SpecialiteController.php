<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Medecin;
use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function showMedecins($id)
    {
        $specialite = Specialite::findOrFail($id);
        $medecins = $specialite->medecins;

        return view('medecin.specialites', compact('specialite', 'medecins'));
    }
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

    public function update(Request $request, $id)
    {
        $medicament = Specialite::findOrFail($id);
        $medicament->name = $request->input('name');
        $medicament->save();

        return redirect()->route('admin.index');
    }
}

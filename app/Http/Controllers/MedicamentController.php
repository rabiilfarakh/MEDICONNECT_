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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
        ]);

        Medicament::create($validatedData);

        return redirect()->route('admin.index')
            ->with('success', 'Médicament ajouté avec succès!');
    }

    public function update(Request $request, $id)
    {
        $medicament = Medicament::findOrFail($id);
        $medicament->nom = $request->input('nom');
        $medicament->save();

        return redirect()->route('admin.index');
    }
}

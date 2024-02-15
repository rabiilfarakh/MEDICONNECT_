<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function storeRating(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'medecin_id' => 'required|exists:medecins,id',
            'patient_id' => 'required|exists:patients,id',
        ]);

        $rating = new Rating();
        $rating->rating = $request->rating;
        $rating->medecin_id = $request->medecin_id;
        $rating->patient_id = $request->patient_id;

        $rating->save();

        return redirect()->back();
    }
}

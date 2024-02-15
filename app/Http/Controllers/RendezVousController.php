<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    public function show(){
        $times = ['08:00 - 09:00','09:00 - 10:00','10:00 - 11:00','11:00 - 12:00','12:00 - 13:00','13:00 - 14:00','14:00 - 15:00','15:00 - 16:00','16:00 - 17:00'] ;
        return view('medecin.rendezVous',compact('times'));
    }
    public function save(Request $request)
    {
        
        $request->validate([
            'time' => 'required|string',
        ]);

    
        $appointment = new RendezVous();
        $appointment->date = $request->input('time');

        $appointment->save();
    
        return redirect()->back();
    }
    
}

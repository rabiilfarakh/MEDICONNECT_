<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function storeComment(Request $request) {

        $request->validate([
            'comment' => 'required|string',
            'medecin_id' => 'required|exists:medecins,id',
            'patient_id' => 'required|exists:patients,id',
        ]);
        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->medecin_id = $request->input('medecin_id');
        $comment->patient_id = $request->input('patient_id');
        
        $comment->save();
        
        return redirect()->back();
        
    }
}

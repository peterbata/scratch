<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;
use App\Note;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    
    {
        
        
        $card->addNote(
            
            new Note($request->all())
            
            );
        
        return back();
        
    }
}

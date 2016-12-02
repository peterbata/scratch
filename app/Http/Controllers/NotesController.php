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
    
    public function edit(Note $note)
    
    {

        return view('notes.edit', compact('note'));
        
    }
    
    public function update(Request $request, Note $note)
    
    {
        
        $note->update($request->all());
        
        return back();
        
    }
}
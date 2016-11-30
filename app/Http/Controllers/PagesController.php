<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home() {
    
    $people = ['Peter', 'Renata', 'Amanda'];
    
    
    return view('welcome', [
        
            'people' => $people
        
       ]);
    }
    
   public function about() {
       
       return view('about');
       
   }
}

<?php

//Route::get('/', 'PagesController@home');
//Route::get('about', 'PagesController@about');


//Route::group(['middleware' => ['web']], function () {
    
    Route::get('cards', 'CardsController@index');
    
    Route::get('cards/{card}', 'CardsController@show');
    
    Route::post('cards/{card}/notes', 'NotesController@store');
    
    Route::get('notes/{note}/edit', 'NotesController@edit');
    Route::patch('notes/{note}', 'NotesController@update');
    
//});


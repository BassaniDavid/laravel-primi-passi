<?php

use Illuminate\Support\Facades\Route;

// rotta: http://127.0.0.1:8000/
Route::get('/', function () {
    // al posto di welcome metti la tua pagina homepage, passando info
    $info = "informazioni da visualizzare dinamicamente con blade";
    // return view('welcome');

    // primo modo
    // return view('homepage', ["info" => $info]);

    // metodo raccomandato
    return view('homepage', compact("info"));
})->name("home");

// rotta: http://127.0.0.1:8000/aboutUs
route::get('/aboutUs', function(){
    return view('aboutUs');
})->name("about_us");

// rotta: http://127.0.0.1:8000/contacts
route::get('/contacts', function(){
    return view('contacts');
})->name("contatti");

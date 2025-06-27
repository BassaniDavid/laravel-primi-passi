<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // al posto di welcome metti la tua pagina homepage
    // return view('welcome');
    return view('homepage');
});

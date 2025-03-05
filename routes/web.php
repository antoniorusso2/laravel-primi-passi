<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contacts'); //reale nome della rotta che deve essere uguale al file .blade.php nella cartella views
})->name('contact-page');//name serve per quando invochiamo la funzione route ma è diverso dal nome della rotta

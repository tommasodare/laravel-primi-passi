<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $informazioni = "Questo è il mio primo progetto in Laravel!";

    return view('home', compact('informazioni'));
});

Route::get('/welcome', function () {
    return view('welcome');
});

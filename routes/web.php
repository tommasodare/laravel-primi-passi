<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $informazioni = "Questo è il mio primo progetto in Laravel!";

    return view('home', compact('informazioni'));
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/carrello', function () {
    return view('carrello');
})->name('carrello');

Route::get('/profilo', function () {
    return view('profilo');
})->name('profilo');

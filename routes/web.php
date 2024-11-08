<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');  // Points to home.blade.php
})->name('home');

Route::get('/photos', function () {
    return view('photos');  // Points to photos.blade.php
})->name('photos');

Route::get('/contact', function () {
    return view('contact');  // Points to contact.blade.php
})->name('contact');

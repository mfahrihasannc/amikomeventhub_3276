<?php

use Illuminate\Support\Facades\Route;

// Rute Home
Route::get('/', function () {
    return view('home');
});

// Rute Profil 
Route::get('/profil', function () {
    return view('profil');
});

// Rute Katalog 
Route::get('/katalog', function () {
    return view('katalog');
});

// Rute Bantuan 
Route::get('/bantuan', function () {
    return view('bantuan');
});

// Rute Kontak
Route::get('/kontak', function () {
    return view('kontak');
});
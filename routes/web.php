<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

Route::get('/', function () {
    return view('loginpage');
})->name('loginpage');

// Route for handling the login verification with CheckRole middleware
Route::post('/welcome', function () {
    return view('homepage');
})->middleware(CheckRole::class);

// Route for access denied page
Route::get('/accessDenied', function () {
    return view('accessDenied');
});

// Additional routes for different pages
Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('about', function () {
    return view('about')->with('hideNavAndFooter', true);
});

Route::get('content', function () {
    return view('content');
});

Route::get('contact', function () {
    return view('contact');
});

// Route for laboratory activities
Route::get('/laboratory-activities', function () {
    return view('labAct'); // points to resources/views/labAct.blade.php
})->name('laboratory.activities');

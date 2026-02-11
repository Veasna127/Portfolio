<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// ----------------------------
// Homepage - accessible to everyone
// ----------------------------
Route::get('/', function () {
    return view('home');
})->name('home');

// ----------------------------
// Guest routes (login & registration)
// ----------------------------
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// ----------------------------
// Authenticated routes (user must be logged in)
// ----------------------------
Route::middleware('auth')->group(function () {
    Route::get('/skill', function () {
        return view('skill');
    })->name('skill');

    Route::get('/project', function () {
        return view('project');
    })->name('project');

    Route::get('/education', function () {
        return view('education');
    })->name('education');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    // Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
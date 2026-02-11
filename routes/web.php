<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// ----------------------------
// Guest routes (for users who are not logged in)
// ----------------------------
Route::get('/', function () {
    return view(view: 'home'); // or whatever your homepage view is called
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


// ----------------------------
// Authenticated routes (user must be logged in)
// ----------------------------
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('skill', function () {
        return view('skill');
    })->name('skill');

    Route::get('project', function () {
        return view('project');
    })->name('project');

    Route::get('education', function () {
        return view('education');
    })->name('education');

    Route::get('about', function () {
        return view('about');
    })->name('about');

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');

    // Logout route
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

// Optional: Redirect root "/" to login or home
Route::get('/', function () {
    return auth()->check() ? redirect()->route('home') : redirect()->route('login');
});

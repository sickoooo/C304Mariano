<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PortfolioController;
// We commented this out because we are skipping the DB query for now
// use App\Models\Portfolio; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. PUBLIC HOME - Redirect directly to the login form
Route::get('/', function () {
    return redirect()->route('login.form');
})->name('home');

// 2. USER PORTFOLIO - This is the page users see AFTER logging in
// We use 'auth' middleware to ensure they are logged in first.
Route::get('/portfolio', function () {
    
    // FIX: We replaced the database query with an empty array.
    // This stops the "Table 'mariano.portfolios' doesn't exist" error.
    $projects = []; 

    // resources/views/portfolio.blade.php
    return view('portfolio', compact('projects'));

})->middleware('auth')->name('user.portfolio');


// AUTH ROUTES
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login.form');
})->name('logout');


// ADMIN ROUTES
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // /admin/portfolio -> PortfolioController@index, create, store, etc.
        Route::resource('portfolio', PortfolioController::class)->except(['show']);
    });
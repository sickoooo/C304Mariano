<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); #default


Route::view('home', 'home'); #this is my first project
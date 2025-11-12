<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); #default


Route::view('portfolio', 'portfolio'); #this is my portfolio
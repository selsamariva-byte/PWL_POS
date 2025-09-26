<?php

use App\Http\Controllers\levelcontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('level', levelcontroller::class);

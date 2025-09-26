<?php

use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\levelcontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('level', levelcontroller::class);
Route::get('/kategori', [kategoricontroller::class, 'index']);

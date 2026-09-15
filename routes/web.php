<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counties', [App\Http\Controllers\CountyController::class, 'index'])->name('counties.index');
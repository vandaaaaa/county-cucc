<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;


Route::get('/', [App\Http\Controllers\CountyController::class, 'index'])->name('counties.index');
Route::get('/counties', [App\Http\Controllers\CountyController::class, 'index'])->name('counties.index');
Route::post('/counties', [CountyController::class, 'store'])->name('counties.store');
Route::get('/counties/create', [App\Http\Controllers\CountyController::class, 'create'])->name('counties.create');


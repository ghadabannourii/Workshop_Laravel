<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvisorController;

Route::get('/advisor', [AdvisorController::class, 'show'])
    ->middleware('check.age')
    ->name('advisor');

Route::get('/acces-refuse', function () {
    return view('acces-refuse');
})->name('acces.refuse');
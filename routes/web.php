<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test route works!';
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

// Routes Resource pour la gestion des cours
Route::resource('courses', CourseController::class);

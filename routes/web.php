<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FrontendController;

// Dashboard (default)
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Resource Routes
Route::resource('gallery', GalleryController::class);
Route::resource('genre', GenreController::class);

// Auth Routes
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

// Frontend Routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/home', 'index')->name('frontend.index');
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/contact', 'contact')->name('frontend.contact');
    Route::get('/work', 'work')->name('frontend.work');
    Route::get('/testimoni', 'testimoni')->name('frontend.testimoni');
    Route::get('/single/{id}', 'single')->name('frontend.single');
});
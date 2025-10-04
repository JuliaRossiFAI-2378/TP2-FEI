<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('landing');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    
});
Route::get('FAQ', function () { return Inertia::render('FAQ'); })->name('FAQ');
Route::get('landing', function () { return Inertia::render('landing'); })->name('landing');
Route::get('dashboard', function () { return Inertia::render('landing'); })->name('dashboard');
Route::get('post1', function () { return Inertia::render('post1'); })->name('post1');
Route::get('post2', function () { return Inertia::render('post2'); })->name('post2');
Route::get('post3', function () { return Inertia::render('post3'); })->name('post3');
Route::get('post4', function () { return Inertia::render('post4'); })->name('post4');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

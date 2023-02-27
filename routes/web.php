<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;



Route::get('/', WelcomeController::class);

Route::get('/about', AboutController::class);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/admin/contact-info/create', [ContactController::class, 'create']);

Route::post('/admin/contact-info/create', [ContactController::class, 'store']);

Route::get('/admin/contacts', [AdminContactController::class, 'index']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


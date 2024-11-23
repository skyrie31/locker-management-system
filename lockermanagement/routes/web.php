<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AllocateController;

// Correct route group
Route::get('/', function () {
    return redirect('/adminlogin');
});

Route::get('/dashboard', function () {
    return view('dashboard'); })->name('dashboard');

Route::get('/adminlogin', [LoginController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [LoginController::class, 'adminlogin'])->name('admin.login');


Route::prefix('allocate')->name('allocate.')->group(function () {
    // Show allocation page
    Route::get('/', [AllocateController::class, 'index'])->name('index'); 

    // Store a new allocation
    Route::post('/store', [AllocateController::class, 'store'])->name('store'); 

    // Update an existing allocation
    Route::put('/update/{id}', [AllocateController::class, 'update'])->name('update'); 

    // Delete an allocation
    Route::delete('/destroy/{id}', [AllocateController::class, 'destroy'])->name('destroy');
});


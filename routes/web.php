<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
});

// ─── Protected Routes (Harus Login) ──────────────────
Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    // Resident Routes
    Route::get('/resident', [ResidentController::class, 'index'])->name('resident.index');
    Route::get('/resident/create', [ResidentController::class, 'create'])->name('resident.create');
    Route::post('/resident', [ResidentController::class, 'store'])->name('resident.store');
    Route::get('/resident/{id}', [ResidentController::class, 'edit'])->name('resident.edit');
    Route::put('/resident/{id}', [ResidentController::class, 'update'])->name('resident.update');
    Route::delete('/resident/{id}', [ResidentController::class, 'destroy'])->name('resident.destroy');
});

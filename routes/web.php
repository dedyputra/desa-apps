<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.dashboard');
});


// Resident Routes
Route::get('/resident', [ResidentController::class, 'index'])->name('resident.index');
Route::get('/resident/create', [ResidentController::class, 'create'])->name('resident.create');
Route::get('/resident/{id}', [ResidentController::class, 'edit'])->name('resident.edit');
Route::post('/resident', [ResidentController::class, 'store'])->name('resident.store');
Route::put('/resident/{id}', [ResidentController::class, 'update'])->name('resident.update');
Route::delete('/resident/{id}', [ResidentController::class, 'delete'])->name('resident.delete');

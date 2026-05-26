<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('quienes_somos');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});
Route::get('/quienes_somos', function () {
    return view('quienes_somos');
});
Route::get('/terminos-y-uso', function () {
    return view('terminos-y-uso');
});
Route::post('/contacto', [ContactoController::class, 'procesar']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','es.admin'])->prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    }) ->name('admin.dashboard');
});

require __DIR__.'/auth.php';

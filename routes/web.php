<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\NoteServiceController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

// Route::get('/parametres', function () {
//     return view('settings/index');
// });

// Recrutement
Route::get('/nouvelle-demande', [RecrutementController::class, 'create'])->name('recrutement.index');
Route::post('/create-demande', [RecrutementController::class, 'store'])->name('createRecrutment');
Route::get('/liste-demande', [RecrutementController::class, 'getListByUser'])->name('recrutement.list');


// Settings
Route::get('/parametres', [ProfileController::class, 'getAllUser'])->name('settings.user');
Route::get('/add-user', [ProfileController::class, 'create'])->name('settings.create');


// Note de service
Route::get('/note-service', [NoteServiceController::class, 'create'])->name('services.note');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

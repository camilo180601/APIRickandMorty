<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    
    return redirect()->route('characters.index');
});

Route::get('characters', [CharacterController::class, 'index'])->name('characters.index');
Route::get('characters/show/{id}', [CharacterController::class, 'show'])->name('characters.show');
Route::get('characters-store', [CharacterController::class, 'store'])->name('characters.store');
Route::get('characters/edit/{id}', [CharacterController::class, 'edit'])->name('characters.edit');
Route::put('characters/update/{id}', [CharacterController::class, 'update'])->name('characters.update');
Route::delete('characters-delete/{id}', [CharacterController::class, 'destroy'])->name('characters.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BonjourController;
use App\Http\Controllers\UserController;

// Cette ligne est celle qui te manque pour l'accueil
Route::get('/', [BonjourController::class, 'index'])->name('home');

// Ta route pour l'annuaire
Route::get('/utilisateurs', [UserController::class, 'index'])->name('annuaire.index');
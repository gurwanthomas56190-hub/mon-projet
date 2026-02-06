<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BonjourController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

// Page d'accueil dynamique
Route::get('/', [BonjourController::class, 'index'])->name('home');

// Tes autres routes existantes
Route::get('/utilisateurs', [UserController::class, 'index'])->name('annuaire.index');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
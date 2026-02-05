<?php

use Illuminate\Support\Facades\Route;
// ⚠️ Très important : on doit "importer" le contrôleur pour que Laravel le trouve
use App\Http\Controllers\UserController;
use App\Http\Middleware\WindowsAuthenticate;
// L'annuaire sera accessible sur /utilisateurs
Route::get('/utilisateurs', [UserController::class, 'index'])
    ->middleware(WindowsAuthenticate::class)
    ->name('annuaire.index');
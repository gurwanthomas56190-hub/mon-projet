<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonjourController extends Controller
{
    public function index()
    {
        // On demande simplement d'afficher le fichier index.blade.php
        return view('index');
    }
}
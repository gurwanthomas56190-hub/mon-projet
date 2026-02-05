<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonjourController extends Controller
{
    // On crée la fonction "index" qui reçoit le prénom
    public function index($prenom)
    {
        return view('hello', ['nom' => $prenom]);
    }
}
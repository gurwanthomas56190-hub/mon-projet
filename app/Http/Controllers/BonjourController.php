<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use App\Models\Document;
use Illuminate\Http\Request;

class BonjourController extends Controller
{
    public function index()
    {
        // On récupère les compteurs pour le dashboard
        $stats = [
            'users' => User::count(),
            'tasks' => Task::count(),
            'docs'  => Document::count(),
        ];

        return view('index', compact('stats'));
    }
}
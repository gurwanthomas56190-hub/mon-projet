<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
// On retire le "use App\Models\User" pour utiliser le chemin direct en bas, c'est plus sûr pour le test.

class UserController extends Controller
{
    public function index()
    {
        // On utilise \App\Models\User pour forcer le bon chemin
        $users = \App\Models\User::with('service')->orderBy('last_name')->get();

        return view('annuaire.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

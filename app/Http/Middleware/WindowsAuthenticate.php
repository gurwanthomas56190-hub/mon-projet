<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use Symfony\Component\HttpFoundation\Response;

class WindowsAuthenticate
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            // Simulation du GUID envoyé par Apache (à remplacer par $request->server('REMOTE_USER'))
            $guid = $request->server('REMOTE_USER') ?? 'GUID-TEST-123';
            
            dd($request->server('REMOTE_USER'));

            if ($guid) {
                // Simulation des infos que l'on recevra de l'AD
                $infoAD = [
                    'prenom' => 'Jean',
                    'nom'    => 'Dupont',
                    'email'  => 'j.dupont@silvadec.com',
                    'service'=> 'Informatique'
                ];
                

                // 1. On gère le service
                $service = Service::firstOrCreate(['name' => $infoAD['service']]);

                // 2. On synchronise l'utilisateur
                $user = User::updateOrCreate(
                    ['guid' => $guid],
                    [
                    'first_name' => $infoAD['prenom'], // Clé de gauche = nom dans la DB
                    'last_name'  => $infoAD['nom'],    // Clé de gauche = nom dans la DB
                    'email'      => $infoAD['email'],
                    'service_id' => $service->id,
                    ]
                );

                Auth::login($user);
                dump('test3');
            }
        }

        return $next($request);
    }
}
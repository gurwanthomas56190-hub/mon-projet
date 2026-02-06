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
        // Si l'utilisateur n'est pas connecté, on tente de le connecter via SSO
        if (!Auth::check()) {
            // Simulation du GUID (à remplacer par la vraie valeur en production)
            $guid = $request->server('REMOTE_USER') ?? 'GUID-TEST-123';

            if ($guid) {
                // Simulation des données Active Directory
                $infoAD = [
                    'prenom' => 'Jean',
                    'nom'    => 'Dupont',
                    'email'  => 'j.dupont@silvadec.com',
                    'service'=> 'Informatique'
                ];

                // 1. On récupère ou on crée le service
                $service = Service::firstOrCreate(['name' => $infoAD['service']]);

                // 2. On met à jour ou on crée l'utilisateur
                // CORRECTION ICI : On utilise 'prenom' et 'nom' comme dans la base de données
                $user = User::updateOrCreate(
                    ['guid' => $guid],
                    [
                        'prenom'     => $infoAD['prenom'], 
                        'nom'        => $infoAD['nom'],    
                        'email'      => $infoAD['email'],
                        'service_id' => $service->id,
                    ]
                );

                // 3. On connecte l'utilisateur
                Auth::login($user);
            }
        }

        return $next($request);
    }
}
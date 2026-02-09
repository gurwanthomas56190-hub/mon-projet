<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    <header class="banderole">
        <h1>Annuaire Entreprise</h1>
    </header>

    <main class="conteneur">
        <table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Service</th>
                    <th>Extension</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td> 
                        <td>{{ $user->last_name }}</td>  
                        <td>{{ $user->email }}</td>      
                        <td>{{ $user->service->name }}</td> 
                        <td>{{ $user->service->phone_extension }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

</body>
</html>
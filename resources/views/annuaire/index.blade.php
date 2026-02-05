<!DOCTYPE html>
<html>
<head>
    <title>Annuaire Silvadec</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .auth-status { background: #e3f2fd; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
    </style>
</head>
<body>

    <h1>📖 Annuaire Interne - Silvadec</h1>

    @if(Auth::check())
        <div class="auth-status">
            ✅ Connecté en tant que : <strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong> (GUID: {{ Auth::user()->guid }})
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Service</th>
                <th>Extension (Num)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->service?->name ?? 'Non défini' }}</td>
                    <td>{{ $user->service?->phone_extension ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
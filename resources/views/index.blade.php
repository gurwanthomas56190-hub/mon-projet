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
                <td>{{ $user->first_name }}</td> <td>{{ $user->last_name }}</td>  <td>{{ $user->email }}</td>      <td>{{ $user->service->name }}</td> <td>{{ $user->service->phone_extension }}</td> </tr>
        @endforeach
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th>Nit</th>
            <th>Nombre</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

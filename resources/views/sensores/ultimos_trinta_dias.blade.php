<table>
    <thead>
        <tr>
            <th>id</th>
            <th>estado</th>
            <th>data</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($result as $sensor)
        <tr>
            <td>{{ $sensor->id }}</td>
            <td>{{ $sensor->estado }}</td>
            <td>{{ $sensor->dia_hora->format('d-m-Y H:i:s') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
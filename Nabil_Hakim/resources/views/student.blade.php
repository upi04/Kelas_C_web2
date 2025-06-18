<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan 4</title>

    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold underline m-4">Halaman Student</h1>
    <table class="table-md">
        <thead>
            <tr>
                @foreach ($student['field'] as $field)
                    <th>{{ $field }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($student['data'] as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['birthdate'] }}</td>
                    <td>{{ $data['major'] }}</td>
                    <td>{{ $data['created_at'] }}</td>
                    <td>{{ $data['updated_at'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

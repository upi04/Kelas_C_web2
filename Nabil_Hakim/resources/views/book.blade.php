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
    <h1 class="text-3xl font-bold underline m-4">Halaman Book</h1>
    <table class="table-md">
        <thead>
            <tr>
                @foreach ($field as $col)
                    <th>{{ $col }}</th>
                @endforeach
            </tr>
        </thead>
    </table>
</body>

</html>

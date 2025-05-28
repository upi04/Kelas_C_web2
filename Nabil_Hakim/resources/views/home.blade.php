<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan 3</title>
    <style>
        body {
            background-color: darkslategray;
            color: white;
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            margin: 1.5rem;
        }
        table {
            width: 40%;
            background-color: lightgray;
            color: black;
        }
        table,
        th,
        td {
            border: 4px solid black;
            border-collapse: collapse;
            padding-inline: 1rem;
            padding-block: .5rem;
        }
    </style>
</head>

<body>
    <div>
        <h1>Laporan 3 Pemrogaraman Web 2</h1>
        <table>
            <tr>
                <th colspan="2">Biodata Diri</th>
            </tr>
            @foreach ($biodata as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>

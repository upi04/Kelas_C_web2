<!DOCTYPE html>
<html>
<head>
    <title>Biodata Lengkap</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color:deeppink;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Biodata Lengkap</h2>
    <table>
        @foreach ($biodata as $key => $value)
        <tr>
            <th>{{ $key }}</th>
            <td>{{ $value }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

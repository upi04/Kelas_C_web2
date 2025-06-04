<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: maroon;
            margin-bottom: 30px;
        }
        .biodata-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: maroon;
            color: white;
            width: 30%;
        }
        td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="biodata-container">
        <h1>Biodata</h1>
        <table border="1">
            @foreach ($Biodata as $key => $value)
                <tr>
                    <th>{{ ucfirst(str_replace('_', ' ', $key)) }}</th>
                    <td>
                        @if(is_array($value))
                            {{ implode(', ', $value) }}
                        @else
                            {{ $value ?? '-' }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
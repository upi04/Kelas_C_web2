<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Nur Hikmah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #fffafc;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff0f6;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(255, 192, 203, 0.3);
        }
        h2 {
            text-align: center;
            color: #d63384;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #f8d7da;
        }
        th {
            text-align: left;
            color: #c2185b;
            width: 30%;
        }
        td {
            color: #444;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🌷 Biodata Nur Hikmah 🌷</h2>
        <table>
            @foreach ($biodata as $label => $value)
                <tr>
                    <th>{{ $label }}</th>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </table>
        <div class="footer">Dibuat dengan penuh cinta 💖 oleh Nur Hikmah</div>
    </div>
</body>
</html>

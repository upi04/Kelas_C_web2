<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
     <style>
    .biodata {
        max-width: 600px;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }

    .biodata table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    .biodata th {
        background-color: palevioletred;
        color: white;
        text-align: left;
        padding: 10px;
        font-size: 16px;
        text-transform: capitalize;
    }

    .biodata td {
        background-color: #f9f9f9;
        padding: 10px;
        border-top: 1px solid #ddd;
        font-size: 15px;
    }

    h1 {
        text-align: center;
        font-family: 'Segoe UI', sans-serif;
        margin-bottom: 30px;
        color: #333;
    }
    </style>

</head>
<body>
    <img src="Afiqa.jpg" alt="Foto">
    <h1>BIODATA DIRI</h1>

    <div class="biodata">
       @foreach ($Biodata as $key => $Bio)

       <table>
        <tr>
            <th>{{ ucwords(str_replace('-', ' ', $key)) }}</th>
        </tr>
        <tr>
            <td>{{ $Bio }}</td>
        </tr>   
       </table>
       @endforeach
       
    </div>
</body>
</html>

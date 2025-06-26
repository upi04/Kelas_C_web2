<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
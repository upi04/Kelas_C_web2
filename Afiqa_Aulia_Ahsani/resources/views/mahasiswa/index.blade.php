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
    <a href="/mahasiswa/create">Tambah Mahasiswa</a>
</body>
</html>

<!-- Perbedaan mendasar: -->
<!-- Method GET digunakan untuk mengambil data, sedangkan POST digunakan untuk mengirim data.

Contoh penggunaan di Laravel:

GET - menampilkan form tambah data
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

POST - menyimpan data dari form ke database
Route::post('/mahasiswa', [MahasiswaController::class, 'store']); -->

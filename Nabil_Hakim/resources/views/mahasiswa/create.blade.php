<!DOCTYPE html>
<html>

<head>
    {{-- Laporan 5 --}}
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Form Tambah Mahasiswa</h1>
    <form action="/mahasiswa" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label>NIM:</label><br>
        <input type="text" name="nim"><br>
        @error('nim')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>

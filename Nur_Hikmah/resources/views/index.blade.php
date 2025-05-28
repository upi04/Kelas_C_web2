<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <ul>
        @foreach ($produk as $item )
        <i>
            {{$item}}
        </i>
        @endforeach
    </ul>
</body>
</html>
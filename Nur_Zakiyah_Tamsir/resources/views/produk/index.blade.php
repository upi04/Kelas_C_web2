<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar produk</h1>

    <ul>@foreach ($produk as $item )
       <li>
        {{ $item }}
       </li>
    @endforeach
</ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1", cellpadding="10", cellspacing="0">
        <tr>
            <th>title</th>
            <th>author</th>
            <th>published_year</th>
            <th>description</th>
        </tr>
        @foreach ($books as $book) :
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_year }}</td>
                <td>{{ $book->description }}</td>
            </tr>
        @endforeach

    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan 3 Pemrograman Web 2</title>
    <style>
        html {
            background-color: white;
            color: black;
        }
        div {
            margin: 1rem 2rem;
        }
        nav {
            margin: 1rem 2rem;
            border-bottom: 4px solid grey;
        }
        ul {
            display: flex;
            flex-direction: row;
            gap: 2rem;
            list-style-type: none;
            padding: 0;
            margin: 2rem .5rem 1rem;
        }
        li.inactive a {
            text-decoration: none;
            font-size: 1.2rem;
        }
        li.inactive a:hover {
            text-decoration: underline;
            font-size: 1.2rem;
        }
        li.active a {
            text-decoration: underline;
            font-size: 1.2rem;
            color: blue;
        }
        table {
            width: 50%;
        }
        table,
        th,
        td {
            border: 2px solid grey;
            border-collapse: collapse;
            padding-inline: 1rem;
            padding-block: .5rem;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: .5rem;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <ul>
            <li class={{ request()->is('home') ? 'active' : 'inactive' }}>
                <a href="/home">Home</a>
            </li>
            <li class={{ request()->is('blog') ? 'active' : 'inactive' }}>
                <a href="/blog">Blog</a>
            </li>
            <li class={{ request()->is('skill') ? 'active' : 'inactive' }}>
                <a href="/skill">Skill</a>
            </li>
            <li class={{ request()->is('message') ? 'active' : 'inactive' }}>
                <a href="/message">Message</a>
            </li>
        </ul>
    </nav>
    <div>
        @yield('content')
    </div>
</body>

</html>

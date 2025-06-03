@extends('layouts.app')

@section('content')
    <h1>Halaman Blog</h1>
    <table>
        @foreach ($blog as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
                <td><a class="btn btn-error" href="blog/{{ $key }}">Lihat</a></td>
            </tr>
        @endforeach
    </table>
@endsection

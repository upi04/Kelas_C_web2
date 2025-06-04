@extends('layouts.app')

@section('content')
    <h1>Halaman Home</h1>
    <table>
        @foreach ($biodata as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>
@endsection

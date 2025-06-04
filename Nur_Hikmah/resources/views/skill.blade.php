@extends('layouts.app')

@section('content')
    <h1>Halaman Skill</h1>
    <table>
        @foreach ($skill as $key => $value)
            <tr>
                <td rowspan="{{ count($value)+1 }}">{{ $key }}</td>
            </tr>
            @foreach ($value as $item)
                <tr>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
@endsection

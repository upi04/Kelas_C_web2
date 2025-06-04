@extends('layouts.app')

@section('content')
    <h1>Halaman Message</h1>
    <form action="message" method="post">
        @csrf
        <div class="flex flex-col gap-2 mx-0! my-4!">
            <label for="name">Name</label>
            <input class="input input-primary text-black bg-transparent" type="text" name="name" required>
            <label for="name">Message</label>
            <textarea class="textarea textarea-primary text-black bg-white" name="message" required></textarea>
            <button class="btn btn-primary w-max" type="submit">Submit</button>
        </div>
    </form>
    <table>
        @foreach ($message as $key => $value)
            <tr>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['message'] }}</td>
                <td><a class="btn btn-error" href="message/delete/{{ $key }}">Hapus</a></td>
            </tr>
        @endforeach
    </table>
@endsection

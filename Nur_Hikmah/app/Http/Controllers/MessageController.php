<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public $message = [
        0 => ['name' => 'Nakim', 'message' => 'Hello World'],
        1 => ['name' => 'Nabil', 'message' => 'Selamat datang di Laravel'],
        2 => ['name' => 'Hikmah', 'message' => 'Apa itu Laravel?'],
    ];

    public function store(Request $request)
    {
        $message = session('message', $this->message);
        $newId = count($message) + 1;
        $message[$newId]['name'] = $request->name;
        $message[$newId]['message'] = $request->message;
        session(['message' => $message]);
        return redirect('/message');
    }

    public function destroy($id)
    {
        $message = session('message', $this->message);
        unset($message[$id]);
        $message = array_values($message);
        if (count($message) == 0) {
            $message = $this->message;
        }
        session(['message' => $message]);
        return redirect('/message');
    }

    public function index()
    {
        $message = session('message', $this->message);
        return view('message', compact('message'));
    }
}

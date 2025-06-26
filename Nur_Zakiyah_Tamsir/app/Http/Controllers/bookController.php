<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index(){
        $books = book::all();
        return view('books', compact('books'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class BookController extends Controller
{
    public function index(){
        $field = Schema::getColumnListing('books');
        return view('book', compact('field'));
    }
}

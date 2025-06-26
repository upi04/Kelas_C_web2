<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class StudentController extends Controller
{
    public function index(){
        $field = Schema::getColumnListing('students');
        $data = Student::all();
        $student = compact('field', 'data');
        return view('student', compact('student'));
    }
}

<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public static function index()
    {
        $students = Student::all(); 
        return view('student.table', compact('students'));
    }
}

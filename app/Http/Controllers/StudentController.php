<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Lấy tất cả sinh viên từ cơ sở dữ liệu
        $students = Student::all();
        return view('students.index', compact('students'));
    }
}

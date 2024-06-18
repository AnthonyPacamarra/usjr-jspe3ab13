<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;
use App\Models\Student;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = Student::all();
        return view('students.showAllStudents', ['students' => $students]);
    }

    public function showStudent($studid)
    {
        $students = Student::findOrFail($studid);
        return view('students.showStudent', ['students' => $students]);
    }
}

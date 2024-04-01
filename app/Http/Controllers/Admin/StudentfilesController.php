<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User; //sana tama aq

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->get();
        return view('admin.students.index', compact('students'));
    }

    public function showDocuments($id)
    {
        $student = User::findOrFail($id);
        return view('admin.students.documents', compact('student'));
    }
}



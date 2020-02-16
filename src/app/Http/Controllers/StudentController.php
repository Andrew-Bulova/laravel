<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected function addForm()
    {

        return view('layouts.form');
    }

    protected function createStudent(StudentRequest $request)
    {
        (new Student($request->validated()))->save();

        return redirect(route('layouts.index'));
    }

    protected function index()
    {
        $students = Student::all();

        return view('layouts.index', compact('students'));
    }

    protected function addMissing($id)
    {
        $student = Student::all()->find($id);

        return view('layouts.missing_form', compact('student'));
    }
}

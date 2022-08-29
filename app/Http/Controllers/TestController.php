<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $students;
    public function index()
    {
        $this->students = Student::getAllStudent();
        return view('test', ['students' => $this->students]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}

<?php

namespace App\Http\Controllers;

class StudentDashbordController extends Controller
{
    public function index()
    {
        return view('student.create-order');
    }
}

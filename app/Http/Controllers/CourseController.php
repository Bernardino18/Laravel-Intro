<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index()
    {
        $courses = [
            "tpsi",
            "teste"
        ];
        return view("Course")->with("courses",$courses);
    }
}

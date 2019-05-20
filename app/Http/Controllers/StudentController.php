<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return view("Student");
    }
    function post()
    {
        $nome = request()->get('nome');
        return view("ContactPost")->with("nome",$nome);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $nome = request()->get("nome");
        //define("nome","André");
        return view("Home")->with("nome",$nome);
    }

}

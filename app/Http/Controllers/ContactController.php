<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        $address = "RUa da atec";
        return view("Contact")->with("address",$address);
    }
    function post()
    {
        $nome = request()->get('nome');
        return view("ContactPost")->with("nome",$nome);
    }
}

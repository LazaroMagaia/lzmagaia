<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view("pages.home");
    }
    
    public function contacto()
    {
        return view("pages.contacto");
    }

}

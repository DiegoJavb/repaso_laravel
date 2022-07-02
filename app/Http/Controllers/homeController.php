<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //para retornar una vista desde resources\views\home.blade.php
    public function index()
    {
        return view('home');
    }
}

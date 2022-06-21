<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function __invoke()
    {
        // para retornar una vista desde la carpeta resources/views/welcome
        return view('welcome');
    }
}

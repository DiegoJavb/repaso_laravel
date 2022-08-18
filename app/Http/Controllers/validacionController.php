<?php

namespace App\Http\Controllers;

use  App\Models\author;
use Illuminate\Http\Request;

class validacionController extends Controller
{
    public function store(Request $request)
    {
        $dato = new author();
        $dato->nombre = $request->name;
        $dato->email = $request->email;
        $dato->password = $request->password;
        $dato->comentario = $request->comment;
        $dato->save();
    }
}

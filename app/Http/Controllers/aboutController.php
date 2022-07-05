<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;

class aboutController extends Controller
{
    //
    public function index()
    {
        return view('about/index');
    }
    public function create()
    {
        $authors = author::all();
        // $authors = array('Juan', 'Pedro', 'Maria');
        // return $authors;
        // return view('about/autores');
        return view('about/autores', compact('authors'));
    }
}

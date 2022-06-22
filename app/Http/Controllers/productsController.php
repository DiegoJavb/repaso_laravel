<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }
    public function create()
    {
        return "carrito de compras activado.";
    }
    public function show($product)
    {
        //pasar un parametro a una view con compact
        return view('products.show', compact('product'));
    }
}

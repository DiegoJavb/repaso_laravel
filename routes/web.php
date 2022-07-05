<?php

use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\productsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', indexController::class);
Route::controller(productsController::class)->group(
    function () {
        Route::get('Productos', 'index');
        Route::get('Productos/crear', 'create');
        Route::get('Productos/{product}', 'show');
    }
);
Route::get('users/{id}', function ($id) {
    return "este es el usuario: " . $id;
});

Route::get('about/contacto', [aboutController::class, 'index']);
Route::get('about/autores', [aboutController::class, 'create']);

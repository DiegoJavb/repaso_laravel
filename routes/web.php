<?php

use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
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
//Route::get('nosotros',nosotros::class);
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

// Route::get('about/contacto', [aboutController::class, 'index'])->name('about.contact');
// Route::get('about/autores', [aboutController::class, 'create'])->name('about.autores');
// Route::get('about/informacion', [aboutController::class, 'show'])->name('about.informacion');
Route::controller(aboutController::class)->group(
    function () {
        Route::get('about', 'index')->name('about.contact');
        Route::get('about/autores', 'create')->name('about.autores');
        Route::get('about/informacion', 'show')->name('about.informacion');
    }
);
Route::get('login', [loginController::class, 'index'])->name('login');

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LugarController;
use App\Models\Libro;
use App\Models\Lugar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio', [
        'lugares' => Lugar::latest()->get(),
    ]);
})->name('inicio');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->name('contacto.enviar');

Route::get('/login', [AuthController::class, 'mostrarLogin'])
    ->name('login');
Route::post('/login', [AuthController::class, 'procesarLogin'])
    ->name('login.procesar');

Route::middleware('auth')->group(function () {
    Route::get('/panel', function () {
        return view('panel', [
            'lugares' => Lugar::latest()->get(),
        ]);
    })->name('panel');

    Route::get('/lugares/nuevo', [LugarController::class, 'crear'])
        ->name('lugares.crear');
    Route::post('/lugares', [LugarController::class, 'guardar'])
        ->name('lugares.guardar');

    Route::post('/logout', [AuthController::class, 'cerrarSesion'])
        ->name('logout');
});

Route::get('/libros', function () {
    $libros = Libro::all();

    return view('libros.index', compact('libros'));
});

Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
});

Route::post('/libros/nuevo', function () {
    return redirect('/libros');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);

Route::get('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);

Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);

Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);

Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


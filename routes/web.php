<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return redirect()->route('login.index'); // Redirige a la vista de inicio de sesión
});

Route::get('/home', function () {
    return view('home'); // Asegúrate de que la vista 'home' exista
})->name('home');

Route ::get('/register', [RegisterController::class,'create']) 
    ->name ('register.index');

    Route ::post('/register', [RegisterController::class,'store']) 
    ->name ('register.store');

Route ::get('/login', [SessionsController::class,'create']) 
    ->name ('login.index');

    Route ::post('/login', [SessionsController::class,'store']) 
    ->name ('login.store');

    Route::get('/home', function () {
        return view('home'); // Asegúrate de que la vista 'home' exista
    })->name('home');

    Route ::get('/logout', [SessionsController::class,'destroy']) 
    ->name ('login.destroy');



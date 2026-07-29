<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/login', [AuthController::class, 'index'] )->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::middleware('auth')->group(function (){

    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])-> middleware('auth')->name('auth.logout');
});

// MVC
// Model -> Interação do banco de dados
// View -> Interface
// Controller -> Lógica 


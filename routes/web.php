<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'] );
Route::post('/login', [AuthController::class, 'authenticate']);

// MVC
// Model -> Interação do banco de dados
// View -> Interface
// Controller -> Lógica 


<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

// MVC
// Model -> Interação do banco de dados
// View -> Interface
// Controller -> Lógica 


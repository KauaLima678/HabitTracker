<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
    
    $name = "Kauã";
    $habits = ['Codar', 'Ler', 'Jogar'];

    return view('home', [
        'name' => $name,
        'habits' => $habits
    ]);
       
     }
    
}

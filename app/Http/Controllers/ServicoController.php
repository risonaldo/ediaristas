<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        //extension laravel go to view
        return view('servicos.index');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        return view('cadastros.medico');
    }

    public function cadastro() 
    {
        return 'cadastro';
    }
}

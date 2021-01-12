<?php

namespace App\Http\Controllers;

use App\acciones;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    
    public function mostrarVista(){

        return view('acciones.email');
    }
}
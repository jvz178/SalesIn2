<?php

namespace App\Http\Controllers;

use App\acciones;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function gestionUsuarios(){

        return view('acciones.gestion');
    }
}

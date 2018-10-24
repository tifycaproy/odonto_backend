<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pacientesController extends Controller
{
    public function index(){
        return view('Pacientes.index');
    }
    public function create(){
        return view('Pacientes.create');
    }
    public function ficha_basico(){
        return view('Pacientes.ficha.index');
    }
    public function ficha_tratamientos(){
        return view('Pacientes.ficha.tratamientos');
    }
    public function ficha_citas(){
        return view('Pacientes.ficha.citas');
    }
    public function ficha_recipes(){
        return view('Pacientes.ficha.recipes');
    }
    public function ficha_informe(){
        return view('Pacientes.ficha.informe');
    }
}

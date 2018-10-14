<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pacientesController extends Controller
{
    public function index(){
        return view('Pacientes.index');
    }
}

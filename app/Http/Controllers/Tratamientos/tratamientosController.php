<?php

namespace App\Http\Controllers\Tratamientos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tratamientosController extends Controller
{
    public function index(){
        return view('Tratamientos.index');
    }
}

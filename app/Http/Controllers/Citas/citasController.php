<?php

namespace App\Http\Controllers\Citas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class citasController extends Controller
{
     public function index(){
        return view('Citas.index');
    }
     public function create(){
        return view('Citas.create');
    }
}

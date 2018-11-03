<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\tipos_sangres;

class tipos_sangresController extends Controller
{
    public function get_tipos_sangres() {
       return json_decode(tipos_sangres::All());
    }
}

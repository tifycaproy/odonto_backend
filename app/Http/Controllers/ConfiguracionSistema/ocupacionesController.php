<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\ocupaciones;

class ocupacionesController extends Controller
{
    public function get_ocupaciones() {
       return json_decode(ocupaciones::All());
    }
}

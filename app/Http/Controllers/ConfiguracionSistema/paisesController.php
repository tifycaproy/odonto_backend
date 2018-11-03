<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\paises;

class paisesController extends Controller
{
    public function get_paises() {
        return json_decode(paises::All());
    }
}

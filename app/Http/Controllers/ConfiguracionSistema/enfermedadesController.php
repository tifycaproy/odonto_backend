<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\enfermedades;

class enfermedadesController extends Controller
{
    public function get_all() {
       return json_decode(enfermedades::All());
    }
}

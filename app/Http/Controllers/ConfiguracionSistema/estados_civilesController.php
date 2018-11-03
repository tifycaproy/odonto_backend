<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\estados_civiles;

class estados_civilesController extends Controller
{
    public function get_estados_civiles() {
       return json_decode(estados_civiles::All());
    }
}

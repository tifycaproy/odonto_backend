<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\sexos;

class sexosController extends Controller
{
    public function get_sexos() {
       return json_decode(sexos::All());
    }
}

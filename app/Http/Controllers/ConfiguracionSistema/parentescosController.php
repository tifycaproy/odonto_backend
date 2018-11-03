<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\parentescos;

class parentescosController extends Controller {

    public function get_parentescos() {
        return json_decode(parentescos::All());
    }

}

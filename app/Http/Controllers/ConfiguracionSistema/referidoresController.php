<?php

namespace App\Http\Controllers\ConfiguracionSistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConfiguracionSistema\referidores;

class referidoresController extends Controller {

    public function get_referidores() {
        return json_decode(referidores::All());
    }

}

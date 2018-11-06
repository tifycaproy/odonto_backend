<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\historias_medicas_enfermedades;

class historias_medicas_enfermedadesController extends Controller {

    private function datos() {

        return
                $historias_medicas = DB::table('historias_medicas_enfermedades');
        //       ->join('pacientes', 'sexos.id_sexo', '=', 'pacientes.id_sexo');
        //->select('users.*', 'contacts.phone', 'orders.price')
        //$pacientes = DB::select('SELECT * FROM pacientes JOIN sexos USING(id_sexo)');
    }

    public function get_historia_medica_enfermedades(Request $request) {
        $historia_enfermedades = $this->datos()->where("id_historia_medica", "=", $request->id_historia_medica)->get();
        return response()->json($historia_enfermedades);
    }

    public function store(Request $request) {
        historias_medicas_enfermedades::where("id_historia_medica", "=", $request->id_historia_medica)->delete();
        if ($request->id_enfermedad) {
            foreach ($request->id_enfermedad as $idx => $id_enfermedad) {
                historias_medicas_enfermedades::create(Array("id_historia_medica" => $request->id_historia_medica, "id_enfermedad" => $id_enfermedad));
            }
        }
        return $retorna = true;
    }

}

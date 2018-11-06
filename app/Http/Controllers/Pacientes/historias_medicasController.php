<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\historias_medicas;
use Redirect;

class historias_medicasController extends Controller
{
    private function datos() {

        return
                $historias_medicas = DB::table('historias_medicas');
         //       ->join('pacientes', 'sexos.id_sexo', '=', 'pacientes.id_sexo');
        //->select('users.*', 'contacts.phone', 'orders.price')
        //$pacientes = DB::select('SELECT * FROM pacientes JOIN sexos USING(id_sexo)');
    }
    
    private function validador($data){
        $retono="";
        $rules = array(
            'bajo_tratamiento' => 'required',
            'toma_medicina' => 'required');
        $messages = array('bajo_tratamiento.required' => 'Seleccione si esta bajo tratamiento',
            'toma_medicina.required' => 'Seleccione si toma alguna medicina');

        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $retono = $validator->errors();
        } elseif ($validator->passes()) {
            $retono="valido";
        }
                
        return $retono;
    }
    
    public function get_historia_medica(Request $request) {
        $historia = $this->datos()->where("id_paciente","=",$request->id_paciente)->get();
        if(count($historia)>0){
            $retorno = response()->json($historia[0]);
        }else{
            $retorno = response()->json(Array());
        }
        return $retorno;       
    }
        
    public function store(Request $request) {

        $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $historia = historias_medicas::create($request->all());
            $request->id_historia_medica=$historia->id_historia_medica;
            $retorna = response()->json(['success' => true, 'message' => 'Creado la Historia Medica', 'historia' => json_decode($historia)], 200);
            $historia_enfermedades = new historias_medicas_enfermedadesController();
            $historia_enfermedades->store($request);
        }
        return $retorna;
    }

    public function update(Request $request) {
        
        //dd($request->id_enfermedad); exit;
        $valido = $this->validador($request->all());

        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $historia = historias_medicas::find($request->id_historia_medica)->update($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Se actualizo la Historia', 'historia' => json_decode($historia)], 200);
            $historia_enfermedades = new historias_medicas_enfermedadesController();
            $historia_enfermedades->store($request);
        }
           
        return $retorna;
    }
    
           
    
}

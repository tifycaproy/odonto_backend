<?php

namespace App\Http\Controllers\Tratamientos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\tratamientos;

class tratamientosController extends Controller
{
    public function index(){
        return view('Tratamientos.index');
    }
    private function validador($data){
        $retono="";
        $rules = array(
            'id_paciente' => 'required',
            'nombre_tratamiento' => 'required',
            'fecha_creado' => 'required',
            'id_odontologo' => 'required'
            );
        $messages = array('nombres.required' => 'Nombre del paciente es requerido',
            'apellidos.required' => 'Apellido del paciente es requerido');

        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $retono = $validator->errors();
        } elseif ($validator->passes()) {
            $retono="valido";
        }
                
        return $retono;
    }
    
    public function store(Request $request) {

       $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $tratamiento = tratamientos::create($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Creado el Tratamiento', 'tratamiento' => json_decode($tratamiento)], 200);
        }

        return $retorna;
    }
    
    public function update(Request $request) {

        $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $tratamiento = tratamientos::find($request->id_tratamiento)->update($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Se actualizo el Tratamiento', 'tratamiento' => json_decode($tratamiento)], 200);
        }

        return $retorna;
    }
}

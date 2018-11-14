<?php

namespace App\Http\Controllers\Tratamientos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\tratamientos;
use Illuminate\Support\Facades\DB;

class tratamientosController extends Controller
{
    public function datos() {

        return DB::table('tratamientos')
                ->join('users', 'id', '=', 'id_odontologo');
        //        ->where('id_status_paciente','=','1');
        //->select('users.*', 'contacts.phone', 'orders.price')
        //$pacientes = DB::select('SELECT * FROM pacientes JOIN sexos USING(id_sexo)');
    }

    public function index(Request $request){
        $tratamientos = $this->datos()->where("id_paciente","=",$request->id_paciente)->get();
        return view('Tratamientos.index')->with('tratamientos', $tratamientos);
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

    public function destroy(Request $request) {

            $tratamiento = tratamientos::find($request->id_tratamiento)->delete();
            $retorna = response()->json(['success' => true, 'message' => 'Se Elimino el Tratamiento', 'tratamiento' => json_decode($tratamiento)], 200);

        return $retorna;
    }
}

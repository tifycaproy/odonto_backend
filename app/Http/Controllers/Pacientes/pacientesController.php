<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Tratamientos\tratamientosController;
use Illuminate\Support\Facades\Validator;
use App\Paciente;
use Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class pacientesController extends Controller {

    private function datos() {

        return
                $pacientes = DB::table('pacientes')
                ->join('sexos', 'sexos.id_sexo', '=', 'pacientes.id_sexo')
                ->where('id_status_paciente','=','1');
        //->select('users.*', 'contacts.phone', 'orders.price')
        //$pacientes = DB::select('SELECT * FROM pacientes JOIN sexos USING(id_sexo)');
    }

    public function index() {
        $pacientes = $this->datos()->paginate(15);
        return view('Pacientes.index')->with('pacientes', $pacientes);
    }

    public function buscar($id_paciente) {
        $pacientes = $this->datos()->where('id_paciente', '=', $id_paciente)->paginate(1);
        return view('Pacientes.index')->with('pacientes', $pacientes);
    }

    public function buscar_nombres_apellidos(Request $request) {
     
        $pacientes = $this->datos()
                    ->where('nombres', 'LIKE', "%$request->nombres_apellidos%")
                    ->orWhere('nombres', $request->nombres_apellidos)
                    ->orWhere('apellidos', 'LIKE', "%$request->nombres_apellidos%")
                    ->orWhere('apellidos', $request->nombres_apellidos)
                    ->paginate(15);
        return view('Pacientes.index')->with('pacientes', $pacientes);
    }

    public function create() {
        return view('Pacientes.create');
    }

    public function ficha_basico($id_paciente) {
        // return "este es el paciente: ".$id_paciente;
        // return view('Pacientes.ficha.index', compact('id_paciente'));
        return view('Pacientes.ficha.index')->with('id_paciente', $id_paciente);
    }

    public function ficha_tratamientos($id_paciente) {
        $Obj_tratamiento = new tratamientosController();
        $tratamientos = $Obj_tratamiento->datos()->where("id_paciente","=",$id_paciente)->get();
        return view('Pacientes.ficha.tratamientos')->with('tratamientos', $tratamientos)->with('id_paciente', $id_paciente);
    }

    public function ficha_tratamientos_cretate($id_paciente) {
        return view('Pacientes.ficha.create-tratamientos')->with('id_paciente', $id_paciente);
    }

    public function ficha_citas($id_paciente) {
        return view('Pacientes.ficha.citas')->with('id_paciente', $id_paciente);
    }

    public function ficha_recipes($id_paciente) {
        return view('Pacientes.ficha.recipes')->with('id_paciente', $id_paciente);
    }

    public function ficha_informe($id_paciente) {
        return view('Pacientes.ficha.informe')->with('id_paciente', $id_paciente);
    }

    public function get_paciente(Request $request) {
        $paciente = Paciente::find($request->id_paciente);
        return response()->json(json_decode($paciente));
        //return "esta llegando el id = ".$request->id_paciente;
    }

    private function validador($data){
        $retono="";
        $rules = array(
            'nombres' => 'required',
            'apellidos' => 'required',
            'id_pais' => 'required',
            'id_tipo_sangre' => 'required',
            'id_estado_civil' => 'required',
            'id_sexo' => 'required',
            'id_ocupacion' => 'required',
            'id_referidor' => 'required'
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

            $paciente = Paciente::create($request->all());
            /*
              $paciente = new Paciente;
              foreach ($paciente->fillable as $id => $campo){
              $paciente->$campo = $request->$campo;
              }
              $paciente->save();
             */
            $retorna = response()->json(['success' => true, 'message' => 'Creado el Paciente', 'paciente' => json_decode($paciente)], 200);
        }

        return $retorna;
    }

    public function update(Request $request) {

        $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $paciente = Paciente::find($request->id_paciente)->update($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Se actualizo el Paciente', 'paciente' => json_decode($paciente)], 200);
        }

        return $retorna;
    }
    
    public function eliminar(Request $request) {
        $paciente = Paciente::find($request->id_paciente)->update(['id_status_paciente' => 2]);
        return $retorna = response()->json(['success' => true, 'message' => 'Se Elimino el Paciente', 'paciente' => json_decode($paciente)], 200);
    }

}

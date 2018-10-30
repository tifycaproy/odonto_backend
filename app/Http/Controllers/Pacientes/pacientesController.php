<?php

namespace App\Http\Controllers\Pacientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Session\SessionManager;
use App\Paciente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class pacientesController extends Controller {

    public function index() {
        return view('Pacientes.index');
    }

    public function create() {
     // alertify()->success("hola")->delay(6000)->position('bottom right');
        return view('Pacientes.create');
    }

    public function ficha_basico() {
        return view('Pacientes.ficha.index');
    }

    public function ficha_tratamientos() {
        return view('Pacientes.ficha.tratamientos');
    }

    public function ficha_citas() {
        return view('Pacientes.ficha.citas');
    }

    public function ficha_recipes() {
        return view('Pacientes.ficha.recipes');
    }

    public function ficha_informe() {
        return view('Pacientes.ficha.informe');
    }

    public function store(Request $request) {
        
        $data = $request->all();

        $rules = array('nombres' => 'required',
            'apellidos' => 'required');
        $messages = array('nombre.required' => 'Nombre del paciente es requerido',
            'apellidos.required' => 'Apellido del paciente es requerido');

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {

            $errors = $validator->errors();
            $retorna = response()->json(['success' => false, 'message' => json_decode($errors)], 400);
        } elseif ($validator->passes()) {

            $paciente = new Paciente;
            $paciente->nombres = $request->nombres;
            $paciente->apellidos = $request->apellidos;
            $paciente->save();
            $retorna = response()->json(['success' => true, 'message' => 'Creado el Paciente', 'paciente' => json_decode($paciente)], 200);
            
        }
        #$retorna["message"]
       // alertify()->success("veremo el mensaje?")->delay(6000)->position('bottom right');
         return $retorna;
        
//        return "guardado";
    }

}

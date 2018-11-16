<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administracion\tratamientos_disponibles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class tratamientos_disponiblesController extends Controller
{
    private function datos() {

        return DB::table('tratamientos_disponibles')
        ->join('tratamientos_categorias', 'tratamientos_categorias.id_tratamiento_categoria', '=', 'tratamientos_disponibles.id_tratamiento_categoria');
        //->select('users.*', 'contacts.phone', 'orders.price')
        //$pacientes = DB::select('SELECT * FROM pacientes JOIN sexos USING(id_sexo)');
    }

    public function index() {
        //$tratamientos_disponibles = $this->datos()->paginate(15);
        //return view('Administracion.tratamientos_disponibles')->with('tratamientos_disponibles', $tratamientos_disponibles);

        $tratamientos_disponibles = $this->datos()->paginate(5);

        $response = [
            'pagination' => [
                'total' => $tratamientos_disponibles->total(),
                'per_page' => $tratamientos_disponibles->perPage(),
                'current_page' => $tratamientos_disponibles->currentPage(),
                'last_page' => $tratamientos_disponibles->lastPage(),
                'from' => $tratamientos_disponibles->firstItem(),
                'to' => $tratamientos_disponibles->lastItem()
            ],
            'registos' => $tratamientos_disponibles
        ];

        return response()->json($response);
    }

    public function create() {
        return view('Administracion.tratamientos_disponibles');
    }

    public function show() {
        return $this->create();
    }

    private function validador($data){
        $retono="";
        $rules = array(
            'id_tratamiento_categoria' => 'required'
            );
        $messages = array('tratamiento_categoria.required' => 'Es Necesario la Categoria del Tratamiento');

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            $retono = $validator->errors();
        } elseif ($validator->passes()) {
            $retono="valido";
        }

        return $retono;
    }

    function get_registro($id_tratamiento_disponible){
       return response()->json( $this->datos()->where('id_tratamiento_disponible','=',$id_tratamiento_disponible)->get());
    }

    public function store(Request $request) {

       $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {

            $tratamientos_disponibles = tratamientos_disponibles::create($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Creado  el Tratamiento Disponible', 'registro' => json_decode($tratamientos_disponibles)], 200);
        }

        return $retorna;
    }
    public function update(Request $request) {

        $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $tratamientos_disponibles = tratamientos_disponibles::find($request->id_tratamiento_disponible)->update($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Se actualizo el Tratamiento Disponible', 'registro' => json_decode($tratamientos_disponibles)], 200);
        }

        return $retorna;
    }

    public function destroy($id_tratamiento_disponible) {
         //       return dd($request);
        //return dd($request);
        $tratamientos_disponibles = tratamientos_disponibles::destroy($id_tratamiento_disponible);
        return response()->json(['success' => true, 'message' => 'Se Elimino el Tratamiento Disponible', 'registro' => json_decode($tratamientos_disponibles)], 200);
    }
}

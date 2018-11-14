<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administracion\tratamientos_categorias;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class tratamientos_categoriasController extends Controller {

    private function datos() {

        return DB::table('tratamientos_categorias');
        //->select('users.*', 'contacts.phone', 'orders.price')
        //$pacientes = DB::select('SELECT * FROM pacientes JOIN sexos USING(id_sexo)');
    }
    
    public function index() {
        $tratamientos_categorias = $this->datos()->paginate(15);
        return view('Administracion.tratamientos_categorias')->with('tratamientos_categorias', $tratamientos_categorias);
    }
    
    public function create() {
        return view('Administracion.tratamientos_categorias_create');
    }
    
    private function validador($data){
        $retono="";
        $rules = array(
            'tratamiento_categoria' => 'required'
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
    
    function get_tratamiento_categoria($id){
       return response()->json( $this->datos()->where('id_tratamiento_categoria','=',$id)->get());
    }
    
    public function store(Request $request) {

       $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {

            $tratamientos_categorias = tratamientos_categorias::create($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Creado la Categoria del Tratamiento', 'tratamiento' => json_decode($tratamientos_categorias)], 200);
        }

        return $retorna;
    }
    public function update(Request $request) {

        $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $tratamientos_categorias = tratamientos_categorias::find($request->id_tratamiento_categoria)->update($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Se actualizo la Categoria del Tratamiento', 'tratamiento' => json_decode($tratamientos_categorias)], 200);
        }

        return $retorna;
    }
    
    public function eliminar(Request $request) {
        $tratamientos_categorias = tratamientos_categorias::find($request->id_tratamiento_categoria)->delete();
        return response()->json(['success' => true, 'message' => 'Se Elimino la Categoria', 'tratamiento' => json_decode($tratamientos_categorias)], 200);
    }

}

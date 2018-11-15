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
        //$tratamientos_categorias = $this->datos()->paginate(15);
        //return view('Administracion.tratamientos_categorias')->with('tratamientos_categorias', $tratamientos_categorias);

        $tratamientos_categorias = tratamientos_categorias::paginate(5);

        $response = [
            'pagination' => [
                'total' => $tratamientos_categorias->total(),
                'per_page' => $tratamientos_categorias->perPage(),
                'current_page' => $tratamientos_categorias->currentPage(),
                'last_page' => $tratamientos_categorias->lastPage(),
                'from' => $tratamientos_categorias->firstItem(),
                'to' => $tratamientos_categorias->lastItem()
            ],
            'registos' => $tratamientos_categorias
        ];

        return response()->json($response);
    }
    
    public function create() {
        return view('Administracion.tratamientos_categorias');
    }

    public function show() {
        return $this->create();
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
            $retorna = response()->json(['success' => true, 'message' => 'Creado la Categoria del Tratamiento', 'registro' => json_decode($tratamientos_categorias)], 200);
        }

        return $retorna;
    }
    public function update(Request $request) {

        $valido = $this->validador($request->all());
        if ($valido!="valido") {
            $retorna = response()->json(['success' => false, 'message' => json_decode($valido)], 200);
        } else {
            $tratamientos_categorias = tratamientos_categorias::find($request->id_tratamiento_categoria)->update($request->all());
            $retorna = response()->json(['success' => true, 'message' => 'Se actualizo la Categoria del Tratamiento', 'registro' => json_decode($tratamientos_categorias)], 200);
        }

        return $retorna;
    }
    
    public function destroy($id_tratamiento_categoria) {
         //       return dd($request);
        //return dd($request);
        $tratamientos_categorias = tratamientos_categorias::destroy($id_tratamiento_categoria);
        return response()->json(['success' => true, 'message' => 'Se Elimino la Categoria', 'registro' => json_decode($tratamientos_categorias)], 200);
    }

}

@extends('layouts.layout')

@section('content')
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Formulario N°001</h4>
         
          <form class="forms-sample">
          	<div class="row">
          		
	            <div class="form-group col-12 col-md-3">
		            <label for="exampleFormControlSelect1">Cliente</label>
		            <select class="form-control " id="exampleFormControlSelect1">
		              <option>Cliente1</option>
		              <option>Cliente2</option>
		              <option>Cliente3</option>
		              <option>Cliente4</option>
		              <option>Cliente5</option>
		            </select>
		        </div>
            <div class="form-group col-12 col-md-3">
                <label for="exampleInputEmail1">Fecha</label>
                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
		      {{--   <div class="form-group col-12 col-md-3">
		            <label for="exampleFormControlSelect1">Manifold</label>
		            <select class="form-control " id="exampleFormControlSelect1">
		              <option>Si</option>
		              <option>No</option>
		            </select>
		        </div> --}}
		       {{--  <div class="form-group col-12 col-md-3">
	              <label for="exampleInputEmail1">Peso</label>
	              <div class="row ">
	              	<div class="col-md-8 col-12">
	              		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="...">
	              	</div>
	              	<div class="col-12 col-md-4">
	              		<select class="form-control " id="exampleFormControlSelect1">
			              <option>Kg</option>
			              <option>Sin Peso</option>
			            </select>
	              	</div>
	              </div>
	              
	            </div> --}}

	        </div>
            <button type="submit" class="btn btn-success mr-2">Generar</button>

          </form>
        </div>
      </div>
    </div>

 
@endsection

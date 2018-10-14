@extends('layouts.layout')

@section('content')

    <div class="col-12  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                	<div class="row ">
                		<div class="col">
                			<h3 class="">Infome</h3>
                		</div>
                		<div class="col ">
	        				<form action="">
	        					<div class="row d-flex justify-content-end">
                      <div class="form-group col-md-4">
                        <select name="" class="form-control">
                          <option value="">Todo</option>
                          <option value="">Verdadero</option>
                          <option value="">Falso</option>}
                        </select>
                      </div>
	        					</div>
	        				</form>
                		</div>
                	</div>
                  <div class="row">
                    <div class="table-responsive col">
                      <table class="table">
                        <thead class="">
                            
                            <tr >
                              <th>Clientes</th>
                              <th>Cuenta de Alerta</th>
                          
                            </tr>
                        </thead>
                        <tbody class="">

                          <tr class="table-active">
    
                            <td><b>Cliente 1</b></td>
                            <td><b>3</b></td>
                          </tr>

                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                        </tbody>
                        <tbody class="">
                          <tr class="table-active">
                            <td > <b>Cliente 2</b></td>
                            <td><b>4</b></td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                        </tbody>
                        <tbody class="">
                          <tr class="table-active">
                            <td > <b>Cliente 3</b></td>
                            <td><b>3</b></td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>00/00/0000</td>
                            <td>1</td>
                          </tr>
                        </tbody>
                        <tbody class="">
                          <tr class="table-active">
                            <td > <b>Total General</b></td>
                            <td><b>10</b></td>
                          </tr>
                         
                        </tbody>

                      </table>
                    </div>
                    
                  </div>
                  
              
                </div>
              </div>
            </div>

@endsection


@push('scripts')

  
@endpush
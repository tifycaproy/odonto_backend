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
                          <option value="">Cliente</option>
                          <option value="">Cliente</option>}
                          <option value="">Cliente</option>}
                        </select>
                      </div>
	        						<div class="form-group col-md-4">
	        							<input type="date" class="form-control" placeholder="">
	        						</div>
	        						<div class="form-group col-md-4">
	        							<input type="date" class="form-control" placeholder="">
	        						</div>
	        					</div>
	        				</form>
                		</div>
                	</div>
                  <div class="row">
                    <div class="table-responsive col-8">
                      <table class="table">
                        <thead class="">
                            <tr class="table-secondary">
                              <th colspan="4">00/00/000</th>
                               <th colspan="4">00/00/000</th>
                            </tr>
                            <tr>
                              <th>Etiquetas de fila</th>
                              <th>Suma de Peso</th>
                              <th>Promedio de Peso2</th>
                              <th>Cuenta de Peso3</th>
                              {{--  --}}
                             
                              
                              <th>Suma de Peso</th>
                              <th>Promedio de Peso2</th>
                              <th>Cuenta de Peso3</th>
                            </tr>
                        </thead>
                        <tbody class="">
                          <tr>
                            <td>Jacob</td>
                            <td>500</td>
                            <td>1</td>
                            <td>700</td>
                            {{--  --}}
                         
                            <td>500</td>
                            <td>1</td>
                            <td>700</td>
                          </tr>
                          <tr>
                           <td>David</td>
                            <td>50</td>
                            <td>3</td>
                            <td>1300</td>
                            {{--  --}}
                            
                            <td>50</td>
                            <td>3</td>
                            <td>1300</td>
                          </tr>
                          <tr class="table-active">
                            <td><b>Total General</b></td>
                            <td><b>550</b></td>
                            <td><b>4</b></td>
                            <td><b>2000</b></td>
                            {{--  --}}
                         
                            <td><b>550</b></td>
                            <td><b>4</b></td>
                            <td><b>2000</b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-4 table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <tr class="table-secondary">
                              <th colspan="4">Totales</th>
                            </tr>
                          </tr>
                          <tr>
                            <th>Total Suma de Peso</th>
                            <th>Total Promedio de Peso 2</th>
                            <th>Total Cuenta de Peso 3</th>
                          </tr>
                        </thead>
                        <tbody class="">
                          <tr>
                            <td>5678</td>
                            <td>1</td>
                       
                            <td>700</td>
                          </tr>
                          <tr>
                            <td>1234</td>
                            <td>2</td>
                         
                            <td>700</td>
                          </tr>
                          <tr class="table-active">
                            <td><b>1234</b></td>
                            <td><b>2</b></td>
                            <td><b>700</b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
              
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h2 class="text-center pb-5">Peso Gestionado vs Fecha de retiro</h2>
                  <canvas id="areaChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
@endsection


@push('scripts')

<script>
    var areaData = {
    labels: ["fecha1", "fecha2", "fecha3", "fecha4", "fecha5", 'fecha6'],
    datasets: [{
      label: '# of Votes',
      data: [0, 50, 100, 50, 250, 250, 300],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 3,
      fill: 'origin', // 0: fill to 'origin'
      fill: '+2', // 1: fill to dataset 3
      fill: 1, // 2: fill to dataset 1
      fill: false, // 3: no fill
      fill: '-2' // 4: fill to dataset 2
    }]
  };

var areaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }

  var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaData,
      options: areaOptions
    });
</script>
  
@endpush
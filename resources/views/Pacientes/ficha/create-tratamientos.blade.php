@extends('Pacientes.ficha.layout_ficha')
@section('titulo', 'Creando Tratamiento')
@section('content-ficha')
<div class="col-12  ">
  <div class="card">
    <div class="card-body" id="tratamientos">

      <div class="d-flex justify-content-between align-items-center">
        <h4>Crear un Tratamientos</h4>
      </div>
      
      <hr>
      
      <tratamientos accion="insertar" paciente="{{$id_paciente}}"></tratamientos>

      <!--
      <div class="table-responsive">
        <table class="table">
            <thead class="">
                <tr class="table-secondary">
                  <th>Fecha</th>
                  <th>N° de Control</th>
                  <th>Odontólogo</th>
                  
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>Fecha</td>
                <td>N° de Control</td>
                <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('paciente.ficha.basico',3) }}" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Fecha</td>
                <td>N° de Control</td>
                <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('paciente.ficha.basico',3) }}" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Fecha</td>
                <td>N° de Control</td>
                <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('paciente.ficha.basico',3) }}" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              
            </tbody>
          </table>
      </div>

      -->
      
    </div>
  </div>
</div>
@endsection

@push('scripts')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/tratamientos.js')}}"></script>
@endpush

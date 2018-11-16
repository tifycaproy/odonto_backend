@extends('Pacientes.ficha.layout_ficha')

@section('content-ficha')

<div class="col-12">
    <div class="card">
        <div class="card-body ">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Historial de Tratamientos</h4>
                <!--
                <a href="{{ route('paciente.ficha.create-tratamientos',$id_paciente) }}" class="btn btn-icons btn-inverse-primary ">
                -->
                <a class="btn btn-icons btn-inverse-primary" onclick="fun_mostrar_ocultar('div_tratamiento','i_bnt_tr')">
                    <i id="i_bnt_tr" class="fa fa-plus"></i>
                </a>
            </div>

        <div class="row col-12" id="div_tratamiento"> <!-- style="visibility: hidden" -->
          <tratamientos accion="insertar" paciente="{{$id_paciente}}"></tratamientos>  
        </div>
      
      <hr>
      <!--
      <form action="" method="" accept-charset="utf-8">
           <div class="row col d-flex justify-content-end">
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Desde</label>
                <input type="date" class="form-control  form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Hasta</label>
                <input type="date" class="form-control form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-4">
                <label for="">Odontólogos</label>
                <select class="form-control form-control-sm" id="" name="">
                  <option>Seleccione</option>
                  <option>Femenimo</option>
              <option>Masculino</option>
            </select>
          </div>
       </div>
  </form>
    -->
    <div class="table-responsive">
       <table class="table">
            <thead class="">
             <tr class="table-secondary">
                <th>Acciones</th>
                  <th>Fecha</th>
                  <th>Nombre Tratamiento</th>
                  <th>Odontólogo</th>
              </tr>
            </thead>
            <tbody class="">
                    @forelse ($tratamientos as $tratamiento)
                    <tr id="tr_{{$tratamiento->id_tratamiento}}">
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <!--
                                <a href="{{ route('paciente.ficha.basico',$id_paciente) }}" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                                -->
                                <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                                <!-- <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>  -->
                                <a class="btn btn-icons btn-inverse-secondary" title="Eliminar" onclick="fun_pregunta_tratamiento({{$tratamiento->id_tratamiento}}, 'tr_')"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                        <td>{{ $tratamiento->fecha_creado }}</td>
                        <td>{{ $tratamiento->nombre_tratamiento }}</td>
                        <td>{{ $tratamiento->name }}</td>

                    </tr>

                    @empty
                <p>No Cuenta con Tratamientos este paciente</p>
                @endforelse


                </tbody>
        </table>
        </div>

        </div>
        </div>
        </div>
        @endsection
        @push('scripts')
        <script src="{{asset('js/tratamientos.js')}}"></script>
        @endpush
@extends('Pacientes.ficha.layout_ficha')
@section('titulo', 'Creando Tratamiento')
@section('content-ficha')
<div class="col-12  ">
  <div class="card">
    <div class="card-body ">

      <div class="d-flex justify-content-between align-items-center">
        <h4>Crear un Tratamientos</h4>
      </div>
      
      <hr>
      <form action="" method="" accept-charset="utf-8">


           <div class="row col d-flex justify-content-end">
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Nombre Tratamiento</label>
                <input type="text" class="form-control  form-control-sm" name="nombre_tratamiento" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Fecha</label>
                <input type="date" class="form-control form-control-sm" name="fecha_creado" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-4">
                <label for="id_odontologo">Odontologo</label>
                <odontologos></odontologos>
              </div>

                 <button class="btn btn-sm btn-success" type="submit">Guardar</button>
              <div class="form-group col-12 col-sm-4">
              </div>

            </div>

      </form>


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

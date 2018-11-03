@extends('Pacientes.ficha.layout_ficha')

@section('content-ficha')
<div class="col-12  ">
  <div class="card">
    <div class="card-body ">

      <div class="d-flex justify-content-between align-items-center">
        <h4>Informes Médicos</h4>
        <a href="" class="btn btn-icons btn-inverse-primary ">
          <i class="fa fa-plus"></i>
        </a>
      </div>
      
      <hr>
      <form action="" method="" accept-charset="utf-8">
           <div class="row col d-flex justify-content-end">
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Desde</label>
                <input type="date" class="form-control  form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Hasta</label>
                <input type="date" class="form-control  form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-4">
                <label for="">Odontólogos</label>
                <select class="form-control form-control-sm" id="" name="">
                  <option>Seleccione</option>
                  <option>00</option>
                  <option>00</option>
                </select>
              </div>
           </div>
      </form>
      <div class="table-responsive">
        <table class="table">
            <thead class="">
                <tr class="table-secondary">
                  <th>N° de Control</th>
                  <th>Fecha</th>
                  <th>Odontólogo</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
              <tr>
                  <td>0</td>
                  <td>Fecha</td>
                  <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>0</td>
                  <td>Fecha</td>
                  <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              
            </tbody>
          </table>
      </div>
      
    </div>
  </div>
</div>
@endsection

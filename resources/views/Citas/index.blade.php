@extends('layouts.layout')

@section('class-back', 'd-none') @section('link-back', url('#'))
@section('class-new', '') @section('link-new',url('citas/create'))
@section('titulo', 'Citas')

@section('content')
  <div class="col-12  grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        {{-- HeaderCard --}}

      <hr>
      <form action="" method="" accept-charset="utf-8">
           <div class="row col d-flex justify-content-end">
              <div class="form-group col-12 col-sm-2 ">
                <label for="">Desde</label>
                <input type="date" class="form-control  form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-2 ">
                <label for="">Hasta</label>
                <input type="date" class="form-control  form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-2 ">
                <label for="">Paciente</label>
                <input type="text" class="form-control  form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-3">
                <label for="">Odontólogos</label>
                <select class="form-control form-control-sm" id="" name="">
                  <option>Seleccione</option>
                  <option>Femenimo</option>
                  <option>Masculino</option>
                </select>
              </div>
           </div>
      </form>
        {{--  --}}

        {{-- TABLE --}}
        <div class="table-responsive">
          <table class="table">
            <thead class="">
                <tr class="table-secondary">
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Paciente</th>
                  <th>Odontólogos</th>
                  <th>Estatus</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Paciente</td>
                <td>Odontólogos</td>
                <td> <label class="badge badge-warning">Pendiente</label></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-envelope"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Paciente</td>
                <td>Odontólogos</td>
                <td> <label class="badge badge-danger">Cancelada</label></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-envelope"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
            
            </tbody>
          </table>
        </div>
        {{--  --}}

        </div>
      </div>
    </div>
@endsection

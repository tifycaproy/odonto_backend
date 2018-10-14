@extends('layouts.layout')

@section('class-back', 'd-none') @section('link-back',url('/#'))
@section('class-new', '') @section('link-new',url('/#'))
@section('titulo', 'Pacientes')

@section('content')
  <div class="col-12  grid-margi/n stretch-card">
    <div class="card">
      <div class="card-body">

        {{-- HeaderCard --}}
        <div class="row mb-4">
          <div class="col ">
	        	<form action="">
	        		<div class="row d-flex justify-content-end">
                <div class="input-group col-md-4 col-12">
                  <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="colored-addon3">
                  <div class="input-group-append bg-primary border-primary">
                    <span class="input-group-text bg-transparent">
                      <i class="fa fa-search text-white"></i>
                    </span>
                  </div>
                </div>
	        		</div>
	        	</form>
          </div>
        </div>
        {{--  --}}

        {{-- TABLE --}}
        <div class="table-responsive">
          <table class="table">
            <thead class="">
                <tr class="table-secondary">
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cédula</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                  <th>Teléfono</th>
                  <th>Correo</th>
                  <th>Dirección</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
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

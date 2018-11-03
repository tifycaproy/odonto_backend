@extends('layouts.layout')

@section('class-back', '') @section('link-back',url('citas'))
@section('class-new', 'd-none') @section('link-new',url('#'))
@section('titulo', 'Crear Cita')

@section('content')

<div class="col-12  grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4>Datos Básicos</h4>
      <hr>
      <form action="">
        <div class="row">
          <div class="form-group col-12 col-sm-6 col-md-6">
            <label for="">Paciente</label>
            <input type="text" class="form-control" id="" name="" placeholder="...">
          </div>
          <div class="form-group col-12 col-sm-6 col-md-6">
            <label for="">Doctor</label>
            <select class="form-control" id="" name="">
              <option>Seleccione</option>
              <option>00</option>
              <option>00</option>
            </select>
          </div>
          <div class="form-group col-12 col-sm-6 col-md-6">
            <label for="">Fechas Disponibles</label>
            <select class="form-control" id="" name="">
              <option>Seleccione</option>
              <option>00</option>
              <option>00</option>
            </select>
          </div>
          <div class="form-group col-12 col-sm-6 col-md-6">
            <label for="">Hora</label>
            <input type="time" class="form-control" id="" name="" placeholder="...">
          </div>

          <div class="form-group col-12 ">
            <label for="">Motivo</label>
           <textarea name="" class="form-control"></textarea>
          </div>

          
         
        </div>
      
    </div>
  </div>
</div>



<div class="col-12 text-center mt-5">
          <input type="submit" class="btn btn-primary btn-lg" name="" value="Guardar">
        </div>
      </form>

  
@endsection

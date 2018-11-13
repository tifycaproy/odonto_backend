@extends('layouts.layout')

@section('class-back', '') @section('link-back', url('pacientes'))
@section('class-new', 'd-none') @section('link-new',url('#'))
@section('titulo', 'Ficha del Paciente')

@section('content')
<div class="row col-12">
  <div class="col-12 col-sm-3 grid-margin ">
      <div class="card">
        
          <ul class="list-group ">
            <a href="{{ route('paciente.ficha.basico',$id_paciente) }}" class="list-group-item list-group-item-action {{ Request::is('pacientes/ficha/*/basico') ? 'active' : '' }}">Datos del Paciente</a>

            <a href="{{ route('paciente.ficha.tratamientos',$id_paciente) }}" class="list-group-item list-group-item-action {{ Request::is('pacientes/ficha/*/tratamientos') ? 'active' : '' }}">Tratamientos</a>

            <a href="{{ route('paciente.ficha.citas',$id_paciente) }}" class="list-group-item list-group-item-action {{ Request::is('pacientes/ficha/*/citas') ? 'active' : '' }}">Citas</a>

            <a href="{{ route('paciente.ficha.recipes',$id_paciente) }}" class="list-group-item list-group-item-action {{ Request::is('pacientes/ficha/*/recipes') ? 'active' : '' }}">Recipes</a>

            <a href="{{ route('paciente.ficha.informe',$id_paciente) }}" class="list-group-item list-group-item-action {{ Request::is('pacientes/ficha/*/informe') ? 'active' : '' }}">Informes Médicos</a>

            <a href="#" class="list-group-item list-group-item-action">Planes de Tratamientos</a>
            {{-- <a href="#" class="list-group-item list-group-item-action">Cuentas</a> 
            La cuentas pasan a un modulo de caja
            --}}
            <a href="#" class="list-group-item list-group-item-action">Odontograma Actual</a>
          </ul>
       
      </div>
    </div>
    <div class="col-12 col-sm-9 grid-margin ">
      
      
          @yield('content-ficha')
       
    </div>
</div>
@endsection

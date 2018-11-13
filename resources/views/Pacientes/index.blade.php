@extends('layouts.layout')

@section('class-back', 'd-none') @section('link-back', url('#'))
@section('class-new', '') @section('link-new',url('pacientes/create'))
@section('titulo', 'Pacientes')

@section('content')
<div class="col-12  grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            {{-- HeaderCard --}}
            <div class="row mb-4">
                <div class="col ">
                    <form method="get" action="pacientes/buscarna/">
                        <div class="row d-flex justify-content-end">
                            <div class="input-group col-md-4 col-12">
                                <input type="text" name="nombres_apellidos" class="form-control" placeholder="Buscar por Nombres o Apellidos" aria-label="Buscar" aria-describedby="colored-addon3">
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
                            <th>Acciones</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula/RUT/DNI/ID</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <!-- <th>Dirección</th> -->
                        </tr>
                    </thead>
                    <tbody class="">
                        @forelse ($pacientes as $paciente)
                        <tr id="tr_{{$paciente->id_paciente}}">
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('paciente.ficha.basico',$paciente->id_paciente) }}" class="btn btn-icons btn-inverse-secondary" title="Ver Paciente"><i class="fa fa-eye"></i></a>
                                    <!--
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file" title="Mostrar PDF"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at" title="Enviar correo"></i></a>
                                    -->
                                    <a class="btn btn-icons btn-inverse-secondary" href="#" onclick="fun_pregunta_paciente({{$paciente->id_paciente}},'tr_')"><i class="fa fa-times" title="Eliminar Paciente"></i></a>
                                </div>
                            </td>
                            <td>{{ $paciente->nombres }}</td>
                            <td>{{ $paciente->apellidos }}</td>
                            <td>{{ $paciente->identificacion }}</td>
                            <td>{{ $paciente->edad }}</td>
                            <td>{{ $paciente->sexo }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->email }}</td>
                            <!-- <td>{{ $paciente->direccion }}</td> -->

                        </tr>

                        @empty
                    <p>No Cuenta con Pacientes</p>
                    @endforelse


                    </tbody>
                </table>
            </div>
            {{--  --}}
            <div id="sampleTable_paginate" class="dataTables_paginate paging_simple_numbers">
                <?php echo $pacientes->render(); ?>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('js/pacientes.js')}}"></script>
@endpush


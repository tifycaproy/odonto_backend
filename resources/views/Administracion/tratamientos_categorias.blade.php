@extends('layouts.layout')

@section('class-back', 'd-none') @section('link-back', url('#'))
@section('class-new', '') @section('link-new',url('tratamientos_categorias/create'))
@section('titulo', 'Categorias - Tratamiento')

@section('content')
<div class="col-12  grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            {{-- HeaderCard --}}
            <!--
            <div class="row mb-4">
                <div class="col ">
                    <form method="get" action="pacientes/buscarna/">
                        <div class="row d-flex justify-content-end">
                            <div class="input-group col-md-4 col-12">
                                <input type="text" name="nombres_apellidos" class="form-control" placeholder="Buscar por Categoria" aria-label="Buscar" aria-describedby="colored-addon3">
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
            -->
            {{--  --}}

            {{-- TABLE --}}
            <div class="table-responsive">
                <table class="table">
                    <thead class="">
                        <tr class="table-secondary">
                            <th>Acciones</th>
                            <th>Categorias</th>
                            
                            <!-- <th>Dirección</th> -->
                        </tr>
                    </thead>
                    <tbody class="">
                        @forelse ($tratamientos_categorias as $categoria )
                        <tr id="tr_{{$categoria->id_tratamiento_categoria}}">
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <!--
                                    <a href="" class="btn btn-icons btn-inverse-secondary" title="Ver Paciente"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file" title="Mostrar PDF"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at" title="Enviar correo"></i></a>
                                    -->
                                    <a class="btn btn-icons btn-inverse-secondary" href="#" onclick="fun_pregunta_tratamientos_categorias({{$categoria->id_tratamiento_categoria}},'tr_')"><i class="fa fa-times" title="Eliminar Paciente"></i></a>
                                </div>
                            </td>
                            <td>{{ $categoria->tratamiento_categoria }}</td>

                   

                        </tr>

                        @empty
                    <p>No Cuenta con Categorias</p>
                    @endforelse


                    </tbody>
                </table>
            </div>
            {{--  --}}
            <div id="sampleTable_paginate" class="dataTables_paginate paging_simple_numbers">
                <?php echo $tratamientos_categorias->render(); ?>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('js/tratamientos_categorias.js')}}"></script>
@endpush
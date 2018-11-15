@extends('layouts.layout')

@section('class-back', '') @section('link-back',url('home'))
@section('class-new', 'd-none') @section('link-new',url('#'))
@section('titulo', 'Categorias Tramamientos')

@section('content')
<div class="col-12  grid-margin stretch-card">
    <div class="card">
        <div class="card-body align-content-center">
           <div id="div_componente_tratamiento">
            <tratamientos-categorias accion="insertar"></tratamientos-categorias>
            </div>
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
                                    <a class="btn btn-icons btn-inverse-secondary" href="#" onclick="fun_actulizar_tratamientos_categorias({{$categoria->id_tratamiento_categoria}})"><i class="fa fa-eye" title="Ver Categoria"></i></a>
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
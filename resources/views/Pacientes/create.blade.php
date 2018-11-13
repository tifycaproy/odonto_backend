@extends('layouts.layout')

@section('class-back', '') @section('link-back',url('pacientes'))
@section('class-new', 'd-none') @section('link-new',url('#'))
@section('titulo', 'Pacientes')

@section('content')

<datos-basicos-cliente accion="insertar"></datos-basicos-cliente>
<!--  -->
<historia-clinica-medica accion="insertar"></historia-clinica-medica>

<div class="col-12  grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4>Odontograma</h4>
            <hr>
            <div class="row text-center">
                <img src="{{ asset('images/odontograma.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="col-12 text-center mt-5">
    <input type="submit" class="btn btn-primary btn-lg" name="" value="Guardar">
</div>



@endsection


@push('scripts')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/crud_pacientes.js')}}"></script>
@endpush
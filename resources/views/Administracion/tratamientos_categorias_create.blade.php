@extends('layouts.layout')

@section('class-back', '') @section('link-back',url('tratamientos_categorias'))
@section('class-new', 'd-none') @section('link-new',url('#'))
@section('titulo', 'Categorias Tramamientos')

@section('content')
<div class="col-12  grid-margin stretch-card">
    <div class="card">
        <div class="card-body align-content-center">
            <tratamientos-categorias accion="insertar"></tratamientos-categorias>
        </div>
    </div>
</div>
@endsection
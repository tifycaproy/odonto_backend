@extends('Pacientes.ficha.layout_ficha')

@section('content-ficha')
<datos-basicos-cliente accion="actualizar" v-bind:paciente="{{ $id_paciente }}"></datos-basicos-cliente>
{{--  --}}
<historia-clinica-medica accion="actualizar" v-bind:paciente="{{ $id_paciente }}"></historia-clinica-medica>
{{--  --}}
@endsection

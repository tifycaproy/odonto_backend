@extends('layouts.layout')

@section('class-back', '') @section('link-back',url('pacientes'))
@section('class-new', 'd-none') @section('link-new',url('#'))
@section('titulo', 'Pacientes')

@section('content')

<datos-basicos-cliente accion="insertar"></datos-basicos-cliente>

{{--  --}}
<div class="col-12  grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4>Historia Clínica-Médica</h4>
            <hr>
            <div class="row">
                <div class="row form-group col-12 col-sm-6 col-md-4">
                    <label for="n_historia">N° de Historia</label>
                    <input type="text" class="form-control" id="n_historia" name="n_historia" placeholder="...">
                </div>

                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="ultima_consulta_medica">Fecha de última consulta médica</label>
                    <input type="date" class="form-control" id="ultima_consulta_medica" name="ultima_consulta_medica" placeholder="...">
                </div>
                <div class="form-group col-12 col-sm-6 col-md-8">
                    <label for="motivo_medica">Motivo</label>
                    <input type="text" class="form-control" id="motivo_medica" name="motivo_medica" placeholder="...">
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="ultima_consulta_odontologica">Fecha de última consulta Odontológica</label>
                    <input type="date" class="form-control" id="ultima_consulta_odontologica" name="ultima_consulta_odontologica" placeholder="...">
                </div>
                <div class="form-group col-12 col-sm-6 col-md-8">
                    <label for="motivo_odontologica">Motivo</label>
                    <input type="text" class="form-control" id="motivo_odontologica" name="motivo_odontologica" placeholder="...">
                </div>
                <hr>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="">Está bajo algún tratamiento médico</label>
                    <div class="d-flex ">
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="" checked>
                            <label class="mt-1" for="">
                                Si
                            </label>
                        </div>
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="">
                            <label class="mt-1" for="">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-8">
                    <label for="">Cual</label>
                    <input type="text" class="form-control" id="" name="" placeholder="...">
                </div>
                {{--  --}}
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="">Está tomando alguna medicina</label>
                    <div class="d-flex ">
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="" checked>
                            <label class="mt-1" for="">
                                Si
                            </label>
                        </div>
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="">
                            <label class="mt-1" for="">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-8">
                    <label for="">Nombre/Dosis/Frecuencia</label>
                    <input type="text" class="form-control" id="" name="" placeholder="...">
                </div>
                {{--  --}}
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="">Ha sido hospitalizado</label>
                    <div class="d-flex ">
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="" checked>
                            <label class="mt-1" for="">
                                Si
                            </label>
                        </div>
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="">
                            <label class="mt-1" for="">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-8">
                    <label for="">Causa</label>
                    <input type="text" class="form-control" id="" name="" placeholder="...">
                </div>
                {{--  --}}
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="">Esta embarazada</label>
                    <div class="d-flex ">
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="" checked>
                            <label class="mt-1" for="">
                                Si
                            </label>
                        </div>
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="">
                            <label class="mt-1" for="">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="">Problemas con anestesicos dentales</label>
                    <div class="d-flex ">
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="" checked>
                            <label class="mt-1" for="">
                                Si
                            </label>
                        </div>
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="">
                            <label class="mt-1" for="">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <h4 class="col-12">Enfermedades que padece</h4>
                <hr>

                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Enf. Cardiovascular
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Cáncer
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Presion arterial alta
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Presion arterial baja
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            VIH
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Fiebre Reumática
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Trastorno Nervioso 
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Sinisitis
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Enf. Gastrointestinales
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Asma
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Enf. Renal
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Tuberculosis
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Diabetes
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Artritis
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Hepatitis
                        </label>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <div class="form-check ml-md-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="mt-1" for="">
                            Glándulas Tiroides
                        </label>
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="">Alergia a medicamento</label>
                    <div class="d-flex ">
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="" checked>
                            <label class="mt-1" for="">
                                Si
                            </label>
                        </div>
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="">
                            <label class="mt-1" for="">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-8">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="" name="" placeholder="...">
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4">
                    <label for="">Alergia a Alimento</label>
                    <div class="d-flex ">
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="" checked>
                            <label class="mt-1" for="">
                                Si
                            </label>
                        </div>
                        <div class="form-check ml-md-4">
                            <input class="form-check-input" type="radio" name="" id="" value="">
                            <label class="mt-1" for="">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-8">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="" name="" placeholder="...">
                </div>


            </div>


        </div>
    </div>
</div>
{{--  --}}

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
</form>


@endsection


@push('scripts')
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/crud_pacientes.js')}}"></script>
@endpush
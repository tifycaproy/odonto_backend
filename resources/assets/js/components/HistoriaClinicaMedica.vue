<template>
    <form v-on:submit.prevent="enviar" id="frm_historia_clinica_medica">
        <input v-model="id_paciente" type="hidden" id="id_paciente_hm" name="id_paciente" >
        <input v-model="id_historia_medica" type="hidden" id="id_historia_medica" name="id_historia_medica" >
        <div class="col-12  grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Historia Clínica-Médica</h4>
                    <hr>
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="ultima_consulta_medica">Fecha de última consulta médica</label>
                            <input v-model="ultima_consulta_medica" type="date" class="form-control" id="ultima_consulta_medica" name="ultima_consulta_medica" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-8">
                            <label for="motivo_medica">Motivo</label>
                            <input  v-model="motivo_medica" type="text" class="form-control" id="motivo_medica" name="motivo_medica" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="ultima_consulta_odontologica">Fecha de última consulta Odontológica</label>
                            <input v-model="ultima_consulta_odontologica" type="date" class="form-control" id="ultima_consulta_odontologica" name="ultima_consulta_odontologica" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-8">
                            <label for="motivo_odontologica">Motivo</label>
                            <input v-model="motivo_odontologica" type="text" class="form-control" id="motivo_odontologica" name="motivo_odontologica" placeholder="...">
                        </div>
                        <hr>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="">Está bajo algún tratamiento médico</label>
                            <div class="d-flex ">
                                <div class="form-check ml-md-4">
                                    <input v-model="bajo_tratamiento" class="form-check-input" type="radio" name="bajo_tratamiento" value="Si" >
                                    <label class="mt-1" for="">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check ml-md-4">
                                    <input v-model="bajo_tratamiento" class="form-check-input" type="radio" name="bajo_tratamiento" value="No">
                                    <label class="mt-1" for="">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-8">
                            <label for="">Cual</label>
                            <input v-model="cual_tratamiento" type="text" class="form-control" id="cual_tratamiento" name="cual_tratamiento" placeholder="...">
                        </div>
                        <!--  -->
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="">Está tomando alguna medicina</label>
                            <div class="d-flex ">
                                <div class="form-check ml-md-4">
                                    <input v-model="toma_medicina" class="form-check-input" type="radio" name="toma_medicina" value="Si">
                                    <label class="mt-1" for="">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check ml-md-4">
                                    <input v-model="toma_medicina" class="form-check-input" type="radio" name="toma_medicina" value="No">
                                    <label class="mt-1" for="">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-8">
                            <label for="">Nombre/Dosis/Frecuencia</label>
                            <input v-model="nombre_medicina" type="text" class="form-control" id="nombre_medicina" name="nombre_medicina" placeholder="...">
                        </div>
                        <!--  -->
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="">Ha sido hospitalizado</label>
                            <div class="d-flex ">
                                <div class="form-check ml-md-4">
                                    <input v-model="hospitalizado" class="form-check-input" type="radio" name="hospitalizado" value="Si">
                                    <label class="mt-1" for="">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check ml-md-4">
                                    <input v-model="hospitalizado" class="form-check-input" type="radio" name="hospitalizado" value="No">
                                    <label class="mt-1" for="">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-8">
                            <label for="">Causa</label>
                            <input v-model="causa_hospitalizacion" type="text" class="form-control" id="" name="causa_hospitalizacion" placeholder="...">
                        </div>
                        <!--  -->
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="">Esta embarazada</label>
                            <div class="d-flex ">
                                <div class="form-check ml-md-4">
                                    <input v-model="embarazada" class="form-check-input" type="radio" name="embarazada" value="Si">
                                    <label class="mt-1" for="">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check ml-md-4">
                                    <input  v-model="embarazada" class="form-check-input" type="radio" name="embarazada" value="No">
                                    <label class="mt-1" for="">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="">Problemas con anestesicos dentales</label>
                            <div class="d-flex ">
                                <div class="form-check ml-md-4">
                                    <input v-model="problema_anestesico_dental" class="form-check-input" type="radio" name="problema_anestesico_dental" value="Si">
                                    <label class="mt-1" for="">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check ml-md-4">
                                    <input v-model="problema_anestesico_dental" class="form-check-input" type="radio" name="problema_anestesico_dental" value="No">
                                    <label class="mt-1" for="">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <h4 class="col-12">Enfermedades que padece</h4>
                        <hr>
                        <div id="div_check_enfermedades" class="row">

                            <enfermedad v-for='enf in enfermedades_t' v-bind:des_enfermedad="enf.enfermedad" v-bind:valor="enf.id_enfermedad" :key="enf.id_enfermedad"></enfermedad>

                        </div>
                        <div class="col-12"></div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="">Alergia a medicamento</label>
                            <div class="d-flex ">
                                <div class="form-check ml-md-4">
                                    <input v-model="alergia_m" class="form-check-input" type="radio" name="alergia_m" value="Si">
                                    <label class="mt-1" for="">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check ml-md-4">
                                    <input v-model="alergia_m" class="form-check-input" type="radio" name="alergia_m" value="No">
                                    <label class="mt-1" for="">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-8">
                            <label for="">Nombre</label>
                            <input v-model="alergia_medicamentos" type="text" class="form-control" name="alergia_medicamentos" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="">Alergia a Alimento</label>
                            <div class="d-flex ">
                                <div class="form-check ml-md-4">
                                    <input v-model="alergia_a" class="form-check-input" type="radio" name="alergia_a" value="Si">
                                    <label class="mt-1" for="">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check ml-md-4">
                                    <input v-model="alergia_a" class="form-check-input" type="radio" name="alergia_a" value="No">
                                    <label class="mt-1" for="">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-8">
                            <label for="">Nombre</label>
                            <input v-model="alergia_alimentos" type="text" class="form-control" id="alergia_alimentos" name="alergia_alimentos" placeholder="...">
                        </div>
                    </div>

                </div>
                <div class="card-footer text-center">
                    <button id="btn_historia_medica" class="btn btn-success btn-lg">Guardar Historia Clinica</button>   
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import axios from 'axios'

            export default {
                props: ['accion', 'paciente', 'historia_medica'],
                data() {
                    return {

                        id_historia_medica: "",
                        id_paciente: "",
                        ultima_consulta_medica: "",
                        motivo_medica: "",
                        ultima_consulta_odontologica: "",
                        motivo_odontologica: "",
                        bajo_tratamiento: "",
                        cual_tratamiento: "",
                        toma_medicina: "",
                        nombre_medicina: "",
                        hospitalizado: "",
                        causa_hospitalizacion: "",
                        embarazada: "",
                        problema_anestesico_dental: "",
                        alergia_m: "",
                        alergia_medicamentos: "",
                        alergia_a: "",
                        alergia_alimentos: "",

                        //campode dependientes de otras tablas
                        //dependencias normalmente son select, radios, checkbox
                        enfermedades_t: [],
                        enfermedades_seleccionadas: [],
                        //variables de control
                        cargando_datos: false,
                        //accion_ejecutar:"crear",
                        boton: "",
                        text_boton: "",
                    }
                },
                mounted() {
                    this.init();
                },
                methods: {
                    get_historia_medica() {
                        this.id_paciente = (this.paciente) ? this.paciente : $("#id_paciente").val();
                        this.id_historia_medica = this.historia_medica;

                        // precargar las opciones en "No"
                        this.bajo_tratamiento = "No";
                        this.toma_medicina = "No";
                        this.hospitalizado = "No";
                        this.embarazada = "No";
                        this.alergia_m = "No";
                        this.alergia_a = "No";
                        this.problema_anestesico_dental = "No";

                        //tablas relacionadas

                        //variables de majeno del DOM
                        this.boton = $('#btn_historia_medica');
                        this.text_boton = this.boton.html();

                        if (this.accion == "actualizar") {
                            $('#btn_historia_medica').prop("disabled", false);
                            axios.get('/historias/get/' + this.id_paciente)
                                    .then((response) => {

                                        if (response.data.id_historia_medica) {
                                            this.id_historia_medica = response.data.id_historia_medica;
                                            this.ultima_consulta_medica = response.data.ultima_consulta_medica;
                                            this.motivo_medica = response.data.motivo_medica;
                                            this.ultima_consulta_odontologica = response.data.ultima_consulta_odontologica;
                                            this.motivo_odontologica = response.data.motivo_odontologica;
                                            this.bajo_tratamiento = response.data.bajo_tratamiento;
                                            this.cual_tratamiento = response.data.cual_tratamiento;
                                            this.toma_medicina = response.data.toma_medicina;
                                            this.nombre_medicina = response.data.nombre_medicina;
                                            this.hospitalizado = response.data.hospitalizado;
                                            this.causa_hospitalizacion = response.data.causa_hospitalizacion;
                                            this.embarazada = response.data.embarazada;
                                            this.problema_anestesico_dental = response.data.problema_anestesico_dental;
                                            this.alergia_m = response.data.alergia_m;
                                            this.alergia_medicamentos = response.data.alergia_medicamentos;
                                            this.alergia_a = response.data.alergia_a;
                                            this.alergia_alimentos = response.data.alergia_alimentos;
                                            //this. = response.data.;
                                            this.get_enfermedades_seleccionadas();

                                        } else {
                                            this.accion = "insertar";
                                        }

                                        //campode dependientes de otras tablas                                              

                                    });

                        }
                    },
                    get_enfermedades() {
                        axios.get('/configuracionsistema/get_enfermedades')
                                .then((response) => {
                                    this.enfermedades_t = response.data;
                                });
                    },
                    get_enfermedades_seleccionadas() {
                        axios.get('/historiasenfermedades/get/' + this.id_historia_medica)
                                .then((response) => {
                                    this.enfermedades_seleccionadas = response.data;
                                }).catch((er) => {
                            alertify.error('Error inesperado: ' + er);
                        }).finally(() => {
                            this.chequear_enfermedad();
                        });
                    },
                    chequear_enfermedad() {
                        $.each(this.enfermedades_seleccionadas, function (idx, enfer) {
                            //console.log(enfer.id_enfermedad);
                            //$("#div_check_enfermedades input[type=checkbox]").val().prop('checked', true);
                            $('#div_check_enfermedades input:checkbox[value='+enfer.id_enfermedad+']').prop("checked","checked");
                        });
                    },
                    init() {
                        axios.all([this.get_enfermedades()])
                                .then(axios.spread(function (tipos_sangres) {
                                    //lo dejamos en blanco pero podriamos trabanar con las respuestas
                                }))
                                .finally(() => {
                                    this.get_historia_medica();
                                });
                    },
                    enviar() {
                        if (this.accion == "insertar") {
                            this.insertar();
                        } else {
                            this.actualizar();
                        }
                    },
                    insertar() {
                        this.manejo_boton(true);
                        this.id_paciente = $("#id_paciente").val();
                        axios.post('/historias', $("#frm_historia_clinica_medica").serialize())
                                .then((response) => {
                                    //console.log(response.data);
                                    if (response.data.success) {
                                        console.log(response.data.paciente);
                                        this.id_historia_medica = this.historia_medica = response.data.historia.id_historia_medica;
                                        this.accion = "actualizar";
                                        alertify.success(response.data.message);
                                    } else {
                                        $.each(response.data.message, function (idx, mes) {
                                            alertify.error(mes[0]);
                                        });
                                    }
                                })
                                .catch((er) => {
                                    alertify.error('Error inesperado: ' + er);
                                }).finally(() => {
                            this.manejo_boton(false);
                        });
                    },
                    actualizar: function () {
                        this.manejo_boton(true);
                        axios.put('/historias/' + this.id_paciente, $("#frm_historia_clinica_medica").serialize())
                                .then(response => {
                                    console.log(response.data);
                                    if (response.data.success) {
                                        alertify.success(response.data.message);
                                    } else {
                                        $.each(response.data.message, function (idx, mes) {
                                            alertify.error(mes[0]);
                                        });
                                    }
                                })
                                .catch((er) => {
                                    alertify.error('Error inesperado: ' + er);
                                }).finally(() => {
                            this.manejo_boton(false);
                        });
                    },
                    manejo_boton(que) {
                        if (que) {
                            this.boton.html('<i class="fa fa-spinner fa-spin"></i> Espere').prop("disabled", true);
                        } else {
                            this.boton.html(this.text_boton).prop("disabled", false);
                        }
                    }


                }
            }
</script>

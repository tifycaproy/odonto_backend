<template>
    <form v-on:submit.prevent="enviar" id="frm_tratamientos">
        <input v-model="id_tratamiento" type="hidden" name="id_tratamiento" id="id_tratamiento" value="">
        <input v-model="id_paciente" type="hidden" name="id_paciente" id="id_paciente" value="">
        <div class="col-12  grid-margin stretch-card">
            <div class="form-group col-12 col-sm-3 ">
                <label for="">Nombre Tratamiento</label>
                <input v-model="nombre_tratamiento" type="text" class="form-control  form-control" name="nombre_tratamiento" placeholder="...">
            </div>
            <div class="form-group col-12 col-sm-3 ">
                <label for="">Fecha</label>
                <input v-model="fecha_creado" type="date" class="form-control form-control" name="fecha_creado" placeholder="..." value="">
            </div>
            <div class="form-group col-12 col-sm-4">
                <label for="id_odontologo">Odontologo</label>
                <select v-model="id_odontologo" class="form-control" id="id_odontologo" name="id_odontologo">
                    <option value="">Seleccione...</option>
                    <option v-for="compo in odontologos" v-bind:value="compo.id" >{{compo.name}}</option>
                </select>
            </div>

            <div class="form-group col-12 col-sm-4">
                <br>
                <button class="btn btn-lg btn-success" id="btn_crear_tratamiento">Guardar</button>
            </div>

        </div>
    </form>
</template>

<script>
    import axios from 'axios'

            export default {
                props: ['accion', 'paciente', 'tratamiento'],
                data() {
                    return {
                        id_tratamiento: "",
                        id_paciente: "",
                        nombre_tratamiento: "",
                        fecha_creado: "",
                        id_odontologo: "",
                        //campode dependientes de otras tablas

                        //dependencias normalmente son select, radios, checkbox
                        odontologos: [],
                        //variables de control
                        cargando_datos: false,
                        //accion_ejecutar:"crear",
                        boton: "",
                        text_boton: "",
                    }
                }
                ,
                mounted() {
                    this.init();
                },
                methods: {
                    get_tratamiento() {
                        this.id_tratamiento = this.tratamiento;
                        this.id_paciente = this.paciente;
                        var d = new Date();
                        this.fecha_creado = this.formatDateToString(d); //d.getDay() + "-" + d.getMonth() + "-" + d.getYear();
                        console.log(this.fecha_creado);
                        //variables de majeno del DOM
                        this.boton = $('#btn_crear_tratamiento');
                        this.text_boton = this.boton.html();

                        if (this.accion == "actualizar") {
                            axios.get('/tratamientos/get/' + this.id_tratamiento)
                                    .then((response) => {

                                        this.id_tratamiento = response.data.id_tratamiento;
                                        this.id_paciente = response.data.id_paciente;
                                        this.nombre_tratamiento = response.data.nombre_tratamiento;
                                        this.fecha_creado = response.data.fecha_creado;
                                        this.id_odontologo = response.data.id_odontologo;

                                    });
                        }
                    }
                    ,
                    get_odontologos() {
                        var url = '/configuracionsistema/get_odontologos';
                        axios.get(url).then((response) => {
                            this.odontologos = response.data;
                            //this.comp_tipo_sangre=;
                        });
                    },

                    init() {
                        // nos traemos las dependencias del componente
                        axios.all([this.get_odontologos()])
                                .then(axios.spread(function (lo_trajo_odontologos) {
                                    //lo dejamos en blanco pero podriamos trabanar con las respuestas
                                }))
                                .finally(() => {
                                    this.get_tratamiento();
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
                        axios.post('/tratamientos', $("#frm_tratamientos").serialize())
                                .then((response) => {
                                    //console.log(response.data);
                                    if (response.data.success) {
                                        // console.log(response.data.paciente);
                                        this.id_tratamiento = this.tratamiento = response.data.tratamiento.id_tratamiento;
                                        this.id_paciente = this.paciente = response.data.tratamiento.id_paciente;
                                        this.accion = "actualizar";
                                        alertify.success(response.data.message);
                                        fun_llamado_externo_componente(response.data.tratamiento);
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
                        axios.put('/tratamientos/' + this.id_tratamiento, $("#frm_tratamientos").serialize())
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
                    },
                    formatDateToString(date) {
                        // 01, 02, 03, ... 29, 30, 31
                        var dd = (date.getDate() < 10 ? '0' : '') + date.getDate();
                        // 01, 02, 03, ... 10, 11, 12
                        var MM = ((date.getMonth() + 1) < 10 ? '0' : '') + (date.getMonth() + 1);
                        // 1970, 1971, ... 2015, 2016, ...
                        var yyyy = date.getFullYear();

                        // create the format you want
                        return (yyyy + "-" + MM + "-" + dd);
                    }


                }
            }
</script>

<template>
    <form v-on:submit.prevent="enviar" id="frm_pacientes">
        <div class="col-12  grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Datos Básicos</h4>
                    <hr>
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label class="label">Identificador Paciente</label>
                            <input v-model="id_paciente" type="text" class="form-control" id="id_paciente" name="id_paciente" readonly>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label class="label">Nombres</label>
                            <input v-model="nombres" type="text" class="form-control" id="nombres" name="nombres" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Apellidos</label>
                            <input v-model="apellidos" type="text" class="form-control" id="apellidos" name="apellidos" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="identificacion">Cedula/DNI/RUT/ID</label>
                            <input v-model="identificacion" type="text" class="form-control" id="identificacion" name="identificacion" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-2">
                            <label>Sexo</label>
                            <select v-model="id_sexo" class="form-control" id="id_sexo" name="id_sexo">
                                <option value="">Seleccione</option>
                                <option v-for="genero in sexos" v-bind:value="genero.id_sexo" >{{genero.sexo}}</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-2">
                            <label>Edad</label>
                            <input v-model="edad" type="text" class="form-control" id="edad" name="edad" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Fecha Nac.</label>
                            <input v-model="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="...">
                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label class="label">Tipo de sangre</label>
                            <select v-model="id_tipo_sangre" class="form-control" id="id_tipo_sangre" name="id_tipo_sangre">
                                <option value="">Seleccione...</option>
                                <option v-for="tipo in tipos_sangres" v-bind:value="tipo.id_tipo_sangre" >{{tipo.tipo_sangre}}</option>
                            </select>

                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="referido">Referido por</label>

                            <select v-model="id_referidor" class="form-control" id="id_referidor" name="id_referidor">
                                <!-- <option value="1">Seleccione...</option> -->
                                <option v-for="campo in referidores" v-bind:value="campo.id_referidor" >{{campo.referidor}}</option>
                            </select>

                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label class="label">Ocupación</label>
                            <select v-model="id_ocupacion" class="form-control" id="id_ocupacion" name="id_ocupacion">
                                <option value="">Seleccione...</option>
                                <option v-for="campo in ocupaciones" v-bind:value="campo.id_ocupacion" >{{campo.ocupacion}}</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="id_estado_civil">Estado Civil</label>
                            <select v-model="id_estado_civil" class="form-control" id="id_estado_civil" name="id_estado_civil">
                                <option value="">Seleccione...</option>
                                <option v-for="estado in estados_civiles" v-bind:value="estado.id_estado_civil" >{{estado.estado_civil}}</option>
                            </select>

                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Seguro Médico</label>
                            <input v-model="seguro_medico" type="text" class="form-control" id="seguro_medico" name="seguro_medico" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>NSS</label>
                            <input v-model="nss" type="text" class="form-control" id="nss" name="nss" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Teléfono</label>
                            <input v-model="telefono" type="text" class="form-control" id="telefono" name="telefono" placeholder="...">
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Numero Movil/Celular</label>
                            <input v-model="celular" type="text" class="form-control" id="celular" name="celular" placeholder="...">
                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Email</label>
                            <input  v-model="email" type="email" class="form-control" id="email" name="email" placeholder="...">
                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="id_pais">Pais</label>
                            <select v-model="id_pais" class="form-control" id="id_pais" name="id_pais">
                                <option value="">Seleccione...</option>
                                <option v-for="comp in paises" v-bind:value="comp.id_pais" >{{comp.pais}}</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Estado</label>
                            <select class="form-control" id="estado" name="estado">
                                <option>Seleccione</option>
                                <option>00</option>
                                <option>00</option>
                            </select>
                        </div>
                        <!--
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label>Ciudad</label>
                            <select class="form-control" id="ciudad" name="ciudad">
                                <option>Seleccione</option>
                                <option>00</option>
                                <option>00</option>
                            </select>
                        </div>
                        -->
                        <div class="form-group col-12 col-sm-6 col-md-12">
                            <label for="direccion" class="label">Direccion</label>
                            <textarea  v-model="direccion" class="form-control" id="direccion" name="direccion" maxlength="254"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><hr/></div>
        <div class="col-12  grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>En caso de Emergencia</h4>
                    <hr>
                    <div class="row">
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="nombre_emergencia">Llamar a:</label>
                            <input v-model="nombre_emergencia" type="text" class="form-control" id="nombre_emergencia" name="nombre_emergencia" placeholder="...">
                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="id_parentesco">Parentesco</label>
                            <select v-model="id_parentesco" class="form-control" id="id_parentesco" name="id_parentesco">
                                <!-- <option value="1">Seleccione...</option> -->
                                <option v-for="combo in parentescos" v-bind:value="combo.id_parentesco" >{{combo.parentesco}}</option>
                            </select>
                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="telefono_emergencia">Teléfono de Emergencia</label>
                            <input v-model="telefono_emergencia" type="text" class="form-control" id="telefono_emergencia" name="telefono_emergencia" placeholder="...">
                        </div>
                    </div>

                </div>
                <div class="card-footer text-center">
                    <button id="btn_crear_paciente" class="btn btn-success btn-lg">Guardar Paciente</button>   
                </div>
            </div>

        </div>
    </form>
</template>

<script>
    import axios from 'axios'

            export default {
                props: ['accion', 'paciente'],
                data() {
                    return {
                        id_paciente: "",
                        nombres: "",
                        apellidos: "",
                        identificacion: "",
                        edad: "",
                        fecha_nacimiento: "",
                        seguro_medico: "",
                        nss: "",
                        telefono: "",
                        celular: "",
                        email: "",
                        direccion: "",
                        nombre_emergencia: "",
                        id_parentesco: "1",
                        telefono_emergencia: "",

                        //campode dependientes de otras tablas
                        id_tipo_sangre: "",
                        id_estado_civil: "",
                        id_sexo: "",
                        id_ocupacion: "",
                        id_referidor: "1",
                        id_pais: "",

                        //dependencias normalmente son select, radios, checkbox
                        tipos_sangres: [],
                        estados_civiles: [],
                        sexos: [],
                        ocupaciones: [],
                        parentescos: [],
                        referidores: [],
                        paises: [],
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
                    get_paciente() {
                        this.id_paciente = this.paciente;
                        //variables de majeno del DOM
                        this.boton = $('#btn_crear_paciente');
                        this.text_boton = this.boton.html();
                        $("#btn_historia_medica").prop("disabled", true);

                        if (this.accion == "actualizar") {
                            axios.get('/pacientes/get/' + this.id_paciente)
                                    .then((response) => {

                                        this.identificacion = response.data.identificacion;
                                        this.nombres = response.data.nombres;
                                        this.apellidos = response.data.apellidos;
                                        this.edad = response.data.edad;
                                        this.fecha_nacimiento = response.data.fecha_nacimiento;
                                        this.seguro_medico = response.data.seguro_medico;
                                        this.nss = response.data.nss;
                                        this.telefono = response.data.telefono;
                                        this.celular = response.data.celular;
                                        this.email = response.data.email;
                                        this.celular = response.data.celular;
                                        this.direccion = response.data.direccion;
                                        this.nombre_emergencia = response.data.nombre_emergencia;
                                        this.telefono_emergencia = response.data.telefono_emergencia;

                                        //campode dependientes de otras tablas                                              
                                        this.id_tipo_sangre = response.data.id_tipo_sangre;
                                        this.id_estado_civil = response.data.id_estado_civil;
                                        this.id_sexo = response.data.id_sexo;
                                        this.id_ocupacion = response.data.id_ocupacion;
                                        this.id_referidor = response.data.id_referidor;
                                        this.id_parentesco = response.data.id_parentesco;
                                        this.id_pais = response.data.id_pais;

                                    });

                        }
                    }
                    ,
                    get_tipos_sangres() {
                        axios.get('/configuracionsistema/get_tipos_sangres')
                                .then((response) => {
                                    this.tipos_sangres = response.data;
                                });
                    },
                    get_estados_civiles() {
                        axios.get('/configuracionsistema/get_estados_civiles')
                                .then((response) => {
                                    this.estados_civiles = response.data;
                                });
                    },
                    get_sexos() {
                        axios.get('/configuracionsistema/get_sexos')
                                .then((response) => {
                                    this.sexos = response.data;
                                });
                    },
                    get_ocupaciones() {
                        axios.get('/configuracionsistema/get_ocupaciones')
                                .then((response) => {
                                    this.ocupaciones = response.data;
                                });
                    },
                    get_parentescos() {
                        axios.get('/configuracionsistema/get_parentescos')
                                .then((response) => {
                                    this.parentescos = response.data;
                                });
                    },
                    get_referidores() {
                        axios.get('/configuracionsistema/get_referidores')
                                .then((response) => {
                                    this.referidores = response.data;
                                });
                    },
                    get_paises() {
                        axios.get('/configuracionsistema/get_paises')
                                .then((response) => {
                                    this.paises = response.data;
                                });
                    },
                    init() {
                        // nos traemos las dependencias del componente
                        axios.all([this.get_tipos_sangres(), this.get_estados_civiles(), this.get_sexos(), this.get_ocupaciones(), this.get_parentescos(), this.get_referidores(), this.get_paises()])
                                .then(axios.spread(function (tipos_sangres, estados_civiles) {
                                    //lo dejamos en blanco pero podriamos trabanar con las respuestas
                                }))
                                .finally(() => {
                                    this.get_paciente();
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

                        axios.post('/pacientes', $("#frm_pacientes").serialize())
                                .then((response) => {
                                    //console.log(response.data);
                                    if (response.data.success) {
                                        console.log(response.data.paciente);
                                        this.id_paciente = this.paciente = response.data.paciente.id_paciente;
                                        $("#id_paciente_hm").val(this.id_paciente);
                                        $("#btn_historia_medica").prop("disabled",false);
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
                        axios.put('/pacientes/' + this.id_paciente, $("#frm_pacientes").serialize())
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

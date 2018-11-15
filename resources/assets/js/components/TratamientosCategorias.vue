<template>
    <form v-on:submit.prevent="enviar" id="frm_tratamientos_categorias">
        <input v-model="id_tratamiento_categoria" type="hidden" name="id_tratamiento_categoria" id="id_tratamiento_categoria" value="">

        <div class="row">
            
            <div class="form-group col-12 col-sm-8 ">
                <label for="">Categorias Tratamiento</label>
                <input v-model="tratamiento_categoria" type="text" class="form-control" name="tratamiento_categoria" placeholder="...">
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
                props: ['accion', 'tratamiento'],
                data() {
                    return {
                        id_tratamiento_categoria: "",
                        tratamiento_categoria: "",
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
                        this.id_tratamiento_categoria = this.tratamiento;
                        //this.tratamiento_categoria = this.paciente;
                        console.log(this.fecha_creado);
                        //variables de majeno del DOM
                        this.boton = $('#btn_crear_tratamiento');
                        this.text_boton = this.boton.html();

                        if (this.accion == "actualizar") {
                            axios.get('/tratamientos_categorias/get/' + this.id_tratamiento_categoria)
                                    .then((response) => {

                                        this.id_tratamiento_categoria = response.data.id_tratamiento_categoria;
                                        this.tratamiento_categoria = response.data.tratamiento_categoria;
                                        
                                    });
                        }
                    }
                    ,
                    
                    init() {
                            this.get_tratamiento();
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
                        axios.post('/tratamientos_categorias', $("#frm_tratamientos_categorias").serialize())
                                .then((response) => {
                                    //console.log(response.data);
                                    if (response.data.success) {
                                        // console.log(response.data.paciente);
                                        this.id_tratamiento_categoria = this.tratamiento = response.data.tratamiento.id_tratamiento_categoria;
                                        this.tratamiento_categoria = this.paciente = response.data.tratamiento.tratamiento_categoria;
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
                        axios.put('/tratamientos_categorias/' + this.id_tratamiento_categoria, $("#frm_tratamientos_categorias").serialize())
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

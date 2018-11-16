/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");

new Vue({

  el: '#modulo_tratamientos_disponibles',

  data: {
    tratamientos_categorias: [],
    tratamientos_disponibles: [],
    pagination: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
      },
    offset: 4,
    formErrors:{},
    accion:"insertar",
    registro : {id_tratamiento_disponible:'',
                tratamiento_disponible:'',
                tratamiento_descripcion:'',
                costo_tratamiento:'',
                id_tratamiento_categoria:''
                },
    //accion_ejecutar:"crear",
    boton: "",
    text_boton: ""
  },

  computed: {
        isActived: function () {
            return this.pagination.current_page;
        },
  pagesNumber: function () {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },

  ready : function(){
          this.getRegistros(this.pagination.current_page);

  },
  mounted(){
        this.getRegistros(this.pagination.current_page);
        this.boton = $('#btn_crear_tratamiento_disponible');
        this.text_boton = this.boton.html();
        this.get_tratamientos_categorias();
  },
  methods : {

        enviar: function() {
            if (this.accion == "insertar") {
                this.insertar();
            } else {
                this.actualizar();
            }
        },
        arranque: function(){

            this.registro.id_tratamiento_disponible="";
            this.registro.tratamiento_disponible="";
            this.registro.tratamiento_descripcion="";
            this.registro.costo_tratamiento="";
            this.registro.id_tratamiento_categoria="";

            this.accion="insertar";
            this.changePage(this.pagination.current_page);

        },
        get_tratamientos_categorias() {
              axios.get('/tratamientos_categorias/get_registros')
                      .then((response) => {
                          this.tratamientos_categorias = response.data;
                      });
        },
        getRegistros: function(page){
            //alert("esto se monto");
            axios.get('/trata_dispo_registo?page='+page).then((response) => {
              this.tratamientos_disponibles=response.data.registos.data;
              this.pagination=response.data.pagination;
            });
        },


        insertar: function(){

          this.manejo_boton(true);

            axios.post('/trata_dispo_registo',this.registro)
            .then((response) => {
              this.changePage(this.pagination.current_page);
                 if (response.data.success) {
                      this.arranque();
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

      editar: function(registroEditar){
          this.registro = registroEditar;
          this.accion="actualizar";
      },

      actualizar: function(){
       this.manejo_boton(true);
        axios.put('/trata_dispo_registo/'+this.registro.id_tratamiento_disponible,this.registro)
         .then((response) => {
                if (response.data.success) {
                       alertify.success(response.data.message);
                       this.arranque();
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

      preguntaEliminar: function(registro){
        var Obj = this;
          alertify.confirm('Confirmacion de Borrado', 'Quiere borrar esta Tratamiento Disponible?', function (bot) {
                Obj.eliminar(registro);
              // console.log(registro);
            }
            , function () {
                alertify.error('Acccion Cancelada');
            });
      },
      eliminar: function(registro){
        var tr = $("#tabla_registro "+registro.id_tratamiento_disponible);
        axios.delete('/trata_dispo_registo/'+registro.id_tratamiento_disponible)
        .then( (response) => {
             if (response.data.success) {
                       tr.remove();
                       alertify.success(response.data.message);
                       this.arranque();
                  } else {
                      $.each(response.data.message, function (idx, mes) {
                          alertify.error(mes[0]);
                      });
             }
        });
      },
      manejo_boton: function(que) {
            if (que) {
                this.boton.html('<i class="fa fa-spinner fa-spin"></i> Espere').prop("disabled", true);
            } else {
                this.boton.html(this.text_boton).prop("disabled", false);
            }
        },
      changePage: function (page) {
          this.pagination.current_page = page;
          this.getRegistros(page);
      }

  }

});


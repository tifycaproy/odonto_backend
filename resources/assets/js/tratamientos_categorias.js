/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");

new Vue({

  el: '#modulo_categorias',

  data: {
    tratamientos_categorias: [],
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
    registro : {'id_tratamiento_categoria':'','tratamiento_categoria':''},
    fillItem : {'id_tratamiento_categoria':'','tratamiento_categoria':''},//pasar el id para actualiazr y elimnar
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
  },
  methods : {

        enviar: function() {
            if (this.accion == "insertar") {
                this.insertar();
            } else {
                this.actualizar();
            }
        },
        arranque(){
            this.registro.id_tratamiento_categoria="";
            this.registro.tratamiento_categoria="";
            this.accion="insertar";
            this.changePage(this.pagination.current_page);
        },
        getRegistros: function(page){
            //alert("esto se monto");
            axios.get('/tratamientos_categorias_registro?page='+page).then((response) => {
              this.tratamientos_categorias=response.data.registos.data;
              this.pagination=response.data.pagination;
              // this.$set('pagination', response.data.pagination);
              // alertify.success('Cargados completos');
            });
        },


        insertar: function(){

            axios.post('/tratamientos_categorias_registro',this.registro).then((response) => {
              this.changePage(this.pagination.current_page);
                 if (response.data.success) {
                      this.arranque();
                      alertify.success(response.data.message);
                  } else {
                      $.each(response.data.message, function (idx, mes) {
                          alertify.error(mes[0]);
                      });
                  }
            }, (response) => {
              this.formErrors = response.data;
          });
        },

      editar: function(registrooEditar){
          this.registro = registrooEditar;
          this.accion="actualizar";
      },

      actualizar: function(){
       // var input = this.fillItem;
        axios.put('/tratamientos_categorias_registro/'+this.registro.id_tratamiento_categoria,this.registro).then((response) => {
                if (response.data.success) {
                       alertify.success(response.data.message);
                       this.arranque();
                  } else {
                      $.each(response.data.message, function (idx, mes) {
                          alertify.error(mes[0]);
                      });
                  }

          }, (response) => {
              this.formErrorsUpdate = response.data;
          });
      },

      preguntaEliminar: function(registro){
        var Obj = this;
          alertify.confirm('Confirmacion de Borrado', 'Quiere borrar esta Categoria de tratamiento?', function (bot) {
                Obj.eliminar(registro);
              // console.log(registro);
            }
            , function () {
                alertify.error('Acccion Cancelada');
            });
      },
      eliminar: function(registro){
        var tr = $("#tabla_registro "+registro.id_tratamiento_categoria);
        axios.delete('/tratamientos_categorias_registro/'+registro.id_tratamiento_categoria).then( (response) => {
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

      changePage: function (page) {
          this.pagination.current_page = page;
          this.getRegistros(page);
      }

  }

});


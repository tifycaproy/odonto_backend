/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 64);
/******/ })
/************************************************************************/
/******/ ({

/***/ 64:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(65);


/***/ }),

/***/ 65:
/***/ (function(module, exports) {

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");

var tratamientos = new Vue({

    el: '#modulo_tratamiento',

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
        formErrors: {},
        formErrorsUpdate: {},
        newItem: { 'id_tratamiento_categoria': '', 'tratamiento_categoria': '' },
        fillItem: { 'id_tratamiento_categoria': '', 'tratamiento_categoria': '' //pasar el id para actualiazr y elimnar
        } },

    computed: {
        isActived: function isActived() {
            return this.pagination.current_page;
        },
        pagesNumber: function pagesNumber() {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + this.offset * 2;
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

    ready: function ready() {
        this.getVueItems(this.pagination.current_page);
    },

    methods: {

        getVueItems: function getVueItems(page) {
            var _this = this;

            this.newItem.id_tratamiento_categoria = "1";
            this.newItem.tratamiento_categoria = "por defecto cargados";
            axios.get('/vueitems?page=' + page).then(function (response) {
                _this.tratamientos_categorias = response.data.registos.data;
                //this.$set('pagination', response.data.pagination);
            });
        },

        createItem: function createItem() {
            var _this2 = this;

            var input = this.newItem;
            axios.post('/vueitems', input).then(function (response) {
                _this2.changePage(_this2.pagination.current_page);
                //this.newItem = {'id':'','rut_socio':'','nombre':'','apellido_paterno':'','apellido_materno':'','domicilio':'','subsidio':'','fecha_ingreso':'','cod_estado':'','cod_ciudad':''};
                $("#create-item").modal('hide');
                alertify.success('Socio agregado.', '', { timeOut: 5000 });
            }, function (response) {
                _this2.formErrors = response.data;
            });
        },

        deleteItem: function deleteItem(socio) {
            axios.delete('/vueitems/' + socio.id).then(function (response) {
                //this.changePage(this.pagination.current_page);
                alertify.success('Socio eliminado', 'Success Alert', { timeOut: 5000 });
            });
        },

        editItem: function editItem(socio) {
            this.fillItem.id = socio.id;
            this.fillItem.rut_socio = socio.rut_socio;
            this.fillItem.nombre = socio.nombre;
            this.fillItem.apellido_paterno = socio.apellido_paterno;
            this.fillItem.apellido_materno = socio.apellido_materno;
            this.fillItem.domicilio = socio.domicilio;
            this.fillItem.subsidio = socio.subsidio;
            this.fillItem.fecha_ingreso = socio.fecha_ingreso;
            this.fillItem.cod_estado = socio.cod_estado;
            this.fillItem.cod_ciudad = socio.cod_ciudad;
            $("#edit-item").modal('show');
        },

        updateItem: function updateItem(cod_socio) {
            var _this3 = this;

            var input = this.fillItem;
            axios.put('/vueitems/' + cod_socio, input).then(function (response) {
                _this3.changePage(_this3.pagination.current_page);
                _this3.fillItem = { 'id': '', 'rut_socio': '', 'nombre': '', 'apellido_paterno': '', 'apellido_materno': '', 'domicilio': '', 'subsidio': '', 'fecha_ingreso': '', 'cod_estado': '', 'cod_ciudad': '' };
                $("#edit-item").modal('hide');
                alertify.success('Socio Actualizado.', 'Success Alert', { timeOut: 5000 });
            }, function (response) {
                _this3.formErrorsUpdate = response.data;
            });
        },

        changePage: function changePage(page) {
            this.pagination.current_page = page;
            this.getVueItems(page);
        }

    }

});

/***/ })

/******/ });
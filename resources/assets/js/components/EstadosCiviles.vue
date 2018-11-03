<template>
    <select v-model="comp_estado_civil" class="form-control" id="id_estado_civil" name="id_estado_civil">
        <option value="">Seleccione...</option>
        <option v-for="estado in estados_civiles" v-bind:value="estado.id_estado_civil" >{{estado.estado_civil}}</option>
    </select>
</template>

<script>
import axios from 'axios'

    export default {
		data(){
			return {
                                comp_estado_civil: '',
				estados_civiles:[],
			}
		},
		created: function(){
			this.get_estados_civiles();
		},
        mounted() {
           this.created();
        },
		methods:{
			get_estados_civiles: function(){
				var url = '/configuracionsistema/get_estados_civiles';
				axios.get(url).then((response)=>{
					this.estados_civiles = response.data;
                                        //this.comp_tipo_sangre=;
				});
		   },
		}
    }
</script>
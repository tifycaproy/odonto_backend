<template>
    <select v-model="comp_tipo_sangre" class="form-control" id="id_tipo_sangre" name="id_tipo_sangre">
      <option value="">Seleccione...</option>
      <option v-for="tipo in tipos_sangres" v-bind:value="tipo.id_tipo_sangre" >{{tipo.tipo_sangre}}</option>
    </select>
</template>

<script>
import axios from 'axios'

    export default {
		data(){
			return {
				comp_tipo_sangre: '',
				tipos_sangres:[],
			}
		},
		created: function(){
			this.get_tipos_sangres();
		},
        mounted() {
           this.created();
        },
		methods:{
			get_tipos_sangres: function(){
				var url = '/configuracionsistema/get_tipos_sangres';
				axios.get(url).then((response)=>{
					this.tipos_sangres = response.data;
                                        //this.comp_tipo_sangre=;
				});
		   },
		}
    }
</script>
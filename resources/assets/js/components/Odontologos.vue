<template>
    <select v-model="comp_odontologo" class="form-control" id="id_odontologo" name="id_odontologo">
        <option value="">Seleccione...</option>
        <option v-for="compo in odontologos" v-bind:value="compo.id_odontologo" >{{compo.name}}</option>
    </select>
</template>

<script>
    import axios from 'axios'

            export default {
                data() {
                    return {
                        comp_odontologo: '',
                        odontologos: [],
                    }
                },
                created() {
                    this.get_odontologos();
                },
                mounted() {
                    this.created();
                    //this.get_odontologos();
                },
                methods: {
                    get_odontologos: function () {
                        var url = '/configuracionsistema/get_odontologos';
                        axios.get(url).then((response) => {
                            this.odontologos = response.data;
                            //this.comp_tipo_sangre=;
                        });
                    },
                }
            }
</script>
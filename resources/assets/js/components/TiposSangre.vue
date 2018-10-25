<template>
    <label for="tipo_sangre">Tipo de sangre</label>
    <select class="form-control" id="tipo_sangre" name="tipo_sangre">
      <option>Seleccione</option>
      <option>tipo uno (A) </option>
      <option>tipo dos (B) </option>
    </select>
</template>

<script>
    export default {
        mounted() {
            console.log('Tipos Sangre.')
        }
    }
</script>
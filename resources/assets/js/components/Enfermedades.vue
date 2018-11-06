<template>
    <div class="form-group col-12 col-sm-6 col-md-4">
        <div class="form-check ml-md-4">
            <input class="form-check-input" type="checkbox" v-bind:value="valor" name="id_enfermedad[]">
            <label class="mt-1" for="">
                {{des_enfermedad}}
            </label>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['des_enfermedad', 'valor'],
    }
</script>
<?php $__env->startSection('class-back', ''); ?> <?php $__env->startSection('link-back',url('home')); ?>
<?php $__env->startSection('class-new', 'd-none'); ?> <?php $__env->startSection('link-new',url('#')); ?>
<?php $__env->startSection('titulo', 'Categorias Tratamientos'); ?>

<?php $__env->startSection('content'); ?>
<?php
    #$tratamientos_categorias
    #https://benjaminhuete.gitbooks.io/vuejs/ejemplo-usando-vue.html
?>
<div class="col-12  grid-margin stretch-card" id="modulo_categorias">
    <div class="card">
        <div class="card-body align-content-center">

            <form v-on:submit.prevent="enviar" id="frm_tratamientos_categorias">
                <input v-model="registro.id_tratamiento_categoria" type="hidden" name="id_tratamiento_categoria" id="id_tratamiento_categoria" value="">

                <div class="row">

                    <div class="form-group col-12 col-sm-8 ">
                        <label for="">Categorias Tratamiento</label>
                        <input v-model="registro.tratamiento_categoria" type="text" class="form-control" name="tratamiento_categoria" placeholder="...">

                    </div>

                    <div class="form-group col-12 col-sm-4">
                        <br>
                        <button class="btn btn-lg btn-success" id="btn_crear_tratamiento">Guardar</button>
                    </div>

                </div>
            </form>


            
            <div class="table-responsive">
                <table class="table">
                    <thead class="">
                        <tr class="table-secondary">
                            <th>Acciones</th>
                            <th>Categorias</th>

                            <!-- <th>Dirección</th> -->
                        </tr>
                    </thead>
                    <tbody class="" id="tabla_registro">

                        <tr v-for="categoria in tratamientos_categorias" :id="categoria.id_tratamiento_categoria">
                            <td>
                                <div class="btn-group" role="group">
                                    <!--
                                    <a href="" class="btn btn-icons btn-inverse-secondary" title="Ver Paciente"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file" title="Mostrar PDF"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at" title="Enviar correo"></i></a>
                                    -->
                                    <a class="btn btn-icons btn-inverse-secondary" href="#" @click.prevent="editar(categoria)"><i class="fa fa-eye" title="Ver Categoria"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary" href="#" @click.prevent="preguntaEliminar(categoria)"><i class="fa fa-times" title="Eliminar Paciente"></i></a>
                                </div>
                            </td>
                            <td>{{categoria.id_tratamiento_categoria}} {{categoria.tratamiento_categoria}}</td>

                        </tr>

                    </tbody>
                </table>



            </div>
            
                    <!-- Pagination -->
        <nav>
            <ul class="btn-group">
                <li v-if="pagination.current_page > 1" class="btn btn-icons btn-inverse-primary">
                    <a href="#" aria-label="Previous"
                       @click.prevent="changePage(pagination.current_page - 1)">
                        <span aria-hidden="true"> << </span>
                    </a>
                </li>
                <li v-for="page in pagesNumber"        class="btn btn-icons btn-inverse-primary"
                    v-bind:class="[ page == isActived ? 'active' : '']">
                    <a href="#"
                       @click.prevent="changePage(page)">{{ page }}</a>
                </li>
                <li v-if="pagination.current_page < pagination.last_page" class="btn btn-icons btn-inverse-primary">
                    <a href="#" aria-label="Next"
                       @click.prevent="changePage(pagination.current_page + 1)">
                        <span aria-hidden="true"> >> </span>
                    </a>
                </li>
            </ul>
        </nav>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('class-back', ''); ?> <?php $__env->startSection('link-back',url('home')); ?>
<?php $__env->startSection('class-new', 'd-none'); ?> <?php $__env->startSection('link-new',url('#')); ?>
<?php $__env->startSection('titulo', 'Categorias Tratamientos'); ?>

<?php $__env->startSection('content'); ?>
<?php
    #$tratamientos_disponibles
    #https://benjaminhuete.gitbooks.io/vuejs/ejemplo-usando-vue.html
?>
<div class="col-12  grid-margin stretch-card" id="modulo_tratamientos_disponibles">
    <div class="card">
        <div class="card-body align-content-center">

            <form v-on:submit.prevent="enviar" id="frm_tratamientos_disponibles">
                <input v-model="registro.id_tratamiento_disponible" type="hidden" name="id_tratamiento_disponible" id="id_tratamiento_disponible" value="">

                <div class="row">
                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="id_tratamiento_categoria">Categoria</label>
                            <select v-model="registro.id_tratamiento_categoria" class="form-control" id="id_tratamiento_categoria" name="id_tratamiento_categoria">
                                <option value="">Seleccione...</option>
                                <option v-for="categoria in tratamientos_categorias" v-bind:value="categoria.id_tratamiento_categoria" >{{categoria.tratamiento_categoria}}</option>
                            </select>

                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label class="label">Tratamiento Disponible</label>
                            <input v-model="registro.tratamiento_disponible" type="text" class="form-control" id="tratamiento_disponible" name="tratamiento_disponible" placeholder="...">
                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-4">
                            <label for="costo_tratamiento" class="label">Costo</label>
                            <input v-model="registro.costo_tratamiento" type="text" class="form-control" id="costo_tratamiento" name="costo_tratamiento" placeholder="...">
                        </div>

                        <div class="form-group col-12 col-sm-6 col-md-12">
                            <label for="tratamiento_descripcion" class="label">Descripcion</label>
                            <textarea  v-model="registro.tratamiento_descripcion" class="form-control" id="tratamiento_descripcion" name="tratamiento_descripcion" maxlength="254"></textarea>
                        </div>

                       <div class="form-group col-12 col-sm-6 col-md-12 text-center">
                          <button id="btn_crear_tratamiento_disponible" class="btn btn-success btn-lg">Guardar</button>
                      </div>

                 </div>
              
            </form>


            
            <div class="table-responsive">
                <table class="table">
                    <thead class="">
                        <tr class="table-secondary">
                            <th>Acciones</th>
                            <th>Categorias</th>
                            <th>Tratamiento Disponible</th>
                            <th>Costo</th>


                            <!-- <th>Dirección</th> -->
                        </tr>
                    </thead>
                    <tbody class="" id="tabla_registro">

                        <tr v-for="registro in tratamientos_disponibles" :id="registro.id_tratamiento_disponible">
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-icons btn-inverse-secondary" href="#" @click.prevent="editar(registro)"><i class="fa fa-eye" title="Ver Tratamiento Disponible"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary" href="#" @click.prevent="preguntaEliminar(registro)"><i class="fa fa-times" title="Eliminar Tratamiento Disponible"></i></a>
                                </div>
                            </td>
                            <td> {{registro.tratamiento_categoria}}</td>
                            <td> {{registro.tratamiento_disponible}}</td>
                            <td> {{registro.costo_tratamiento}}</td>

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
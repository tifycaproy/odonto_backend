<?php $__env->startSection('class-back', 'd-none'); ?> <?php $__env->startSection('link-back', url('#')); ?>
<?php $__env->startSection('class-new', ''); ?> <?php $__env->startSection('link-new',url('pacientes/create')); ?>
<?php $__env->startSection('titulo', 'Pacientes'); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12  grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            
            <div class="row mb-4">
                <div class="col ">
                    <form action="">
                        <div class="row d-flex justify-content-end">
                            <div class="input-group col-md-4 col-12">
                                <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="colored-addon3">
                                <div class="input-group-append bg-primary border-primary">
                                    <span class="input-group-text bg-transparent">
                                        <i class="fa fa-search text-white"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            

            
            <div class="table-responsive">
                <table class="table">
                    <thead class="">
                        <tr class="table-secondary">
                            <th>Acciones</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula/RUT/DNI/ID</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <!-- <th>Dirección</th> -->
                        </tr>
                    </thead>
                    <tbody class="">

                        <?php $__empty_1 = true; $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?php echo e(route('paciente.ficha.basico',$paciente->id_paciente)); ?>" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                            <td><?php echo e($paciente->nombres); ?></td>
                            <td><?php echo e($paciente->apellidos); ?></td>
                            <td><?php echo e($paciente->identificacion); ?></td>
                            <td><?php echo e($paciente->edad); ?></td>
                            <td><?php echo e($paciente->sexo); ?></td>
                            <td><?php echo e($paciente->telefono); ?></td>
                            <td><?php echo e($paciente->email); ?></td>
                            <!-- <td><?php echo e($paciente->direccion); ?></td> -->

                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No Cuenta con Pacientes</p>
                    <?php endif; ?>


                    </tbody>
                </table>
            </div>
            
            <div id="sampleTable_paginate" class="dataTables_paginate paging_simple_numbers">
                <?php echo $pacientes->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
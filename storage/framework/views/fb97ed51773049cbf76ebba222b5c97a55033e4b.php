<?php $__env->startSection('content-ficha'); ?>

<div class="col-12  ">
  <div class="card">
    <div class="card-body ">

      <div class="d-flex justify-content-between align-items-center">
        <h4>Historial de Tratamientos</h4>
        <a href="<?php echo e(route('paciente.ficha.create-tratamientos',$id_paciente)); ?>" class="btn btn-icons btn-inverse-primary ">
          <i class="fa fa-plus"></i>
        </a>
      </div>
      
      <hr>
      <!--
      <form action="" method="" accept-charset="utf-8">
           <div class="row col d-flex justify-content-end">
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Desde</label>
                <input type="date" class="form-control  form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-3 ">
                <label for="">Hasta</label>
                <input type="date" class="form-control form-control-sm" id="" name="" placeholder="...">
              </div>
              <div class="form-group col-12 col-sm-4">
                <label for="">Odontólogos</label>
                <select class="form-control form-control-sm" id="" name="">
                  <option>Seleccione</option>
                  <option>Femenimo</option>
                  <option>Masculino</option>
                </select>
              </div>
           </div>
      </form>
      -->
      <div class="table-responsive">
        <table class="table">
            <thead class="">
                <tr class="table-secondary">
                  <th>Fecha</th>
                  <th>Nombre Tratamiento</th>
                  <th>Odontólogo</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
               <?php $__empty_1 = true; $__currentLoopData = $tratamientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tratamiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr id="tr_<?php echo e($tratamiento->id_tratamiento); ?>">
                <td><?php echo e($tratamiento->fecha_creado); ?></td>
                <td><?php echo e($tratamiento->nombre_tratamiento); ?></td>
                <td><?php echo e($tratamiento->name); ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('paciente.ficha.basico',3)); ?>" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <!-- <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>  -->
                    <a class="btn btn-icons btn-inverse-secondary" title="Eliminar" onclick="fun_pregunta_tratamiento(<?php echo e($tratamiento->id_tratamiento); ?>,'tr_')"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No Cuenta con Tratamientos este paciente</p>
                    <?php endif; ?>


            </tbody>
          </table>
      </div>
      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/tratamientos.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('Pacientes.ficha.layout_ficha', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
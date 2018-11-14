<?php $__env->startSection('titulo', 'Creando Tratamiento'); ?>
<?php $__env->startSection('content-ficha'); ?>
<div class="col-12  ">
  <div class="card">
    <div class="card-body" id="tratamientos">

      <div class="d-flex justify-content-between align-items-center">
        <h4>Crear un Tratamientos</h4>
      </div>
      
      <hr>
      
      <tratamientos accion="insertar" paciente="<?php echo e($id_paciente); ?>"></tratamientos>

      <!--
      <div class="table-responsive">
        <table class="table">
            <thead class="">
                <tr class="table-secondary">
                  <th>Fecha</th>
                  <th>N° de Control</th>
                  <th>Odontólogo</th>
                  
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>Fecha</td>
                <td>N° de Control</td>
                <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('paciente.ficha.basico',3)); ?>" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Fecha</td>
                <td>N° de Control</td>
                <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('paciente.ficha.basico',3)); ?>" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Fecha</td>
                <td>N° de Control</td>
                <td>Odontólogo</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('paciente.ficha.basico',3)); ?>" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              
            </tbody>
          </table>
      </div>

      -->
      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<meta name="_token" content="<?php echo csrf_token(); ?>" />
<script src="<?php echo e(asset('js/tratamientos.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Pacientes.ficha.layout_ficha', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
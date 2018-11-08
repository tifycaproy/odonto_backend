<?php $__env->startSection('class-back', ''); ?> <?php $__env->startSection('link-back', url('pacientes')); ?>
<?php $__env->startSection('class-new', 'd-none'); ?> <?php $__env->startSection('link-new',url('#')); ?>
<?php $__env->startSection('titulo', 'Ficha del Paciente'); ?>

<?php $__env->startSection('content'); ?>
<div class="row col-12">
  <div class="col-12 col-sm-3 grid-margin ">
      <div class="card">
        
          <ul class="list-group ">
            <a href="<?php echo e(route('paciente.ficha.basico',3)); ?>" class="list-group-item list-group-item-action <?php echo e(Request::is('pacientes/ficha/*/basico') ? 'active' : ''); ?>">Datos del Paciente</a>

            <a href="<?php echo e(route('paciente.ficha.tratamientos',3)); ?>" class="list-group-item list-group-item-action <?php echo e(Request::is('pacientes/ficha/*/tratamientos') ? 'active' : ''); ?>">Tratamientos</a>

            <a href="<?php echo e(route('paciente.ficha.citas',3)); ?>" class="list-group-item list-group-item-action <?php echo e(Request::is('pacientes/ficha/*/citas') ? 'active' : ''); ?>">Citas</a>

            <a href="<?php echo e(route('paciente.ficha.recipes',3)); ?>" class="list-group-item list-group-item-action <?php echo e(Request::is('pacientes/ficha/*/recipes') ? 'active' : ''); ?>">Recipes</a>

            <a href="<?php echo e(route('paciente.ficha.informe',3)); ?>" class="list-group-item list-group-item-action <?php echo e(Request::is('pacientes/ficha/*/informe') ? 'active' : ''); ?>">Informes Médicos</a>

            <a href="#" class="list-group-item list-group-item-action">Planes de Tratamientos</a>
            
            <a href="#" class="list-group-item list-group-item-action">Odontograma Actual</a>
          </ul>
       
      </div>
    </div>
    <div class="col-12 col-sm-9 grid-margin ">
      
      
          <?php echo $__env->yieldContent('content-ficha'); ?>
       
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
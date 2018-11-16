<?php $__env->startSection('class-back', ''); ?> <?php $__env->startSection('link-back',url('pacientes')); ?>
<?php $__env->startSection('class-new', 'd-none'); ?> <?php $__env->startSection('link-new',url('#')); ?>
<?php $__env->startSection('titulo', 'Pacientes'); ?>

<?php $__env->startSection('content'); ?>
<div id="app">

    <datos-basicos-cliente accion="insertar"></datos-basicos-cliente>
    <!--  -->
    <historia-clinica-medica accion="insertar"></historia-clinica-medica>

    <div class="col-12  grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4>Odontograma</h4>
                <hr>
                <div class="row text-center">
                    <img src="<?php echo e(asset('images/odontograma.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 text-center mt-5">
        <input type="submit" class="btn btn-primary btn-lg" name="" value="Guardar">
    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
<meta name="_token" content="<?php echo csrf_token(); ?>" />
<script src="<?php echo e(asset('js/crud_pacientes.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
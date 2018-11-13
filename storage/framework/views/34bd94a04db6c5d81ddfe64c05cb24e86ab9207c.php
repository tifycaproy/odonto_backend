<?php $__env->startSection('content-ficha'); ?>
<datos-basicos-cliente accion="actualizar" v-bind:paciente="<?php echo e($id_paciente); ?>"></datos-basicos-cliente>

<historia-clinica-medica accion="actualizar" v-bind:paciente="<?php echo e($id_paciente); ?>"></historia-clinica-medica>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Pacientes.ficha.layout_ficha', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('class-back', 'd-none'); ?> <?php $__env->startSection('link-back',url('/#')); ?>
<?php $__env->startSection('class-new', 'd-none'); ?> <?php $__env->startSection('link-new',url('/#')); ?>
<?php $__env->startSection('titulo', 'Home'); ?>

<?php $__env->startSection('content'); ?>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
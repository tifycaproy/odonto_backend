<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema Odontológico</title>
  <!-- plugins:css -->
 <link rel="stylesheet" href="<?php echo e(asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('js/alertifyjs/css/alertify.min.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('js/alertifyjs/css/themes/bootstrap.min.css')); ?>">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" />
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body p-3">
                    <div class="d-flex justify-content-between">
                      <a href="<?php echo $__env->yieldContent('link-back'); ?>" class="btn btn-icons btn-inverse-primary <?php echo $__env->yieldContent('class-back'); ?>">
                        <i class="fa fa-arrow-left"></i>
                      </a>
                      <h2><?php echo $__env->yieldContent('titulo'); ?></h2>
                      <a href="<?php echo $__env->yieldContent('link-new'); ?>" class="btn btn-icons btn-inverse-primary <?php echo $__env->yieldContent('class-new'); ?>">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php echo $__env->yieldContent('content'); ?>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              </span> 
           
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/vendor.bundle.addons.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('js/misc.js')); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
  <!-- End custom js for this page-->
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>

  <script src="<?php echo e(asset('js/alertifyjs/alertify.js')); ?>"></script>

  <?php echo $__env->make('alertify::alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <script src="<?php echo e(asset('js/axios.min.js')); ?>"></script>
  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
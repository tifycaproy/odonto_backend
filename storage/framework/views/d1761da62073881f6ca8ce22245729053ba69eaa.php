<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendors/css/vendor.bundle.base.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendors/css/vendor.bundle.addons.css')); ?>">
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
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <?php echo $__env->yieldContent('content'); ?>
              
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
           
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/js/vendor.bundle.addons.js')); ?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('js/misc.js')); ?>"></script>
  <!-- endinject -->
</body>

</html>
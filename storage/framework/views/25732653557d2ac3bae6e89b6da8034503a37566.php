<?php $__env->startSection('content'); ?>
    <?php if($errors->has('email')): ?>
        <div class="alert alert-danger" role="alert">
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        </div>
    <?php elseif($errors->has('password')): ?>
        <div class="alert alert-danger" role="alert">
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        </div>
    <?php endif; ?>
<form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label class="label">Email</label>
      <div class="input-group">
         <input id="email" type="email" class="form-control" placeholder="user@example.com" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
        <div class="input-group-append">
          <span class="input-group-text">
            <i class="mdi mdi-check-circle-outline"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="label">Password</label>
      <div class="input-group">
        <input id="password" type="password" class="form-control" name="password" required placeholder="**********">
        <div class="input-group-append">
          <span class="input-group-text">
            <i class="mdi mdi-check-circle-outline"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button class="btn btn-primary submit-btn btn-block">Login</button>
    </div>
    <div class="form-group d-flex justify-content-between">
      <div class="form-check form-check-flat mt-0">
        <label class="form-check-label">
          <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Keep me signed in
        </label>
      </div>
      <a href="<?php echo e(route('password.request')); ?>" class="text-small forgot-password text-black">Forgot Password</a>
    </div>
   
    
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container container_main">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.register')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autofocus>

                <?php if($errors->has('name')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>

            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                <?php if($errors->has('email')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">

                <?php if($errors->has('password')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
              </div>
            </div>

            <div class="form-group<?php echo e($errors->has('secret') ? ' has-error' : ''); ?>">
              <label for="secret" class="col-md-4 control-label">Secret</label>

              <div class="col-md-6">
                <input id="secret" type="password" class="form-control" placeholder="Use the admin secret key" name="secret">

                <?php if($errors->has('secret')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('secret')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Register
                </button>
              </div>
            </div><br>

            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <span>Already a member? <a href="<?php echo e(route('admin.login')); ?>">Log In</a></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Final file\5\stillwaters\resources\views/admin/register.blade.php ENDPATH**/ ?>
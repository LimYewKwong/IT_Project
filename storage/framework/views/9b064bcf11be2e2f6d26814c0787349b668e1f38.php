<?php $__env->startSection('content'); ?>
<div class="container container_secondary">
  <div class="content_secondary">
    <h2>Compare and Purchase the best car insurance</h2><br>
    <form action="<?php echo e(route('insurance')); ?>" class="was-validated" method="post">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <div class="form-group<?php echo e($errors->has('full_name') ? ' has-error' : ''); ?>">
        <label for="full_name">Car Owner Name</label>
        <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo e(old('full_name', session()->get('insurance_data.full_name'))); ?>">
        <?php if($errors->has('full_name')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('full_name')); ?></strong>
        </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('car_number') ? ' has-error' : ''); ?>">
        <label for="car_number">Car Number</label>
        <input type="text" class="form-control" id="car_number" name="car_number" value="<?php echo e(old('car_number', session()->get('insurance_data.car_number'))); ?>">
        <?php if($errors->has('car_number')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('car_number')); ?></strong>
        </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('ic_number') ? ' has-error' : ''); ?>">
        <label for="ic_number">Car Owner IC Number</label>
        <input type="text" class="form-control" id="ic_number" name="ic_number" value="<?php echo e(old('ic_number', session()->get('insurance_data.ic_number'))); ?>">
        <?php if($errors->has('ic_number')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('ic_number')); ?></strong>
        </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('postcode') ? ' has-error' : ''); ?>">
        <label for="postcode">Residential Postcode</label>
        <input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo e(old('postcode', session()->get('insurance_data.postcode'))); ?>">
        <?php if($errors->has('postcode')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('postcode')); ?></strong>
        </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
        <label for="mobile">Mobile Phone No.</label>
        <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo e(old('mobile', session()->get('insurance_data.mobile'))); ?>">
        <?php if($errors->has('mobile')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('mobile')); ?></strong>
        </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo e(old('email', session()->get('insurance_data.email'))); ?>">
        <?php if($errors->has('email')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('maritial_status') ? ' has-error' : ''); ?>">
        <label for="maritial_status">Marital Status</label>
        <div class="form-group">
          <label class="radio-inline">
            <input type="radio" id="single" name="maritial_status" value="single" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'single') echo 'checked'; ?>>
            Single
          </label>
          <label class="radio-inline">
            <input type="radio" id="married" name="maritial_status" value="married" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'married') echo 'checked'; ?>>
            Married
          </label>
          <label class="radio-inline">
            <input type="radio" id="divorced" name="maritial_status" value="divorced" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'divorced') echo 'checked'; ?>>
            Divorced
          </label>
          <label class="radio-inline">
            <input type="radio" id="widow" name="maritial_status" value="widow" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'widow') echo 'checked'; ?>>
            Widow/ Widower
          </label>
        </div>
        <?php if($errors->has('maritial_status')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('maritial_status')); ?></strong>
        </span>
        <?php endif; ?>
      </div><br>


      <div class="form-group<?php echo e($errors->has('data_policy') ? ' has-error' : ''); ?>">
        <input type="checkbox" name="data_policy" id="data_policy" <?php if(old('maritial_status', session()->get('insurance_data.data_policy') == 'on')) echo 'checked'; ?>>
        By clicking this button, you have read and agreed to our Personal Data Policy
        <?php if($errors->has('data_policy')): ?>
        <span class="help-block">
          <strong><?php echo e($errors->first('data_policy')); ?></strong>
        </span>
        <?php endif; ?>
      </div><br>

      <h4>We Accept:</h4>
      <img src="<?php echo e(url('/images/visa.png')); ?>" alt="Visa Image" height="30px;">
      <img src="<?php echo e(url('/images/mastercard.png')); ?>" alt="Mastercard Image" height="30px;">
      <br><br><br>

      <div class="form-group float-right">
        <button type="submit" class="btn btn-primary">
          Register
        </button>
      </div>
    </div>
  </form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aditya Rawat\Desktop\stillwaters\resources\views/insurances/create.blade.php ENDPATH**/ ?>
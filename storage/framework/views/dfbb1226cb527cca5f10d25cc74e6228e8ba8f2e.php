<?php $__env->startSection('content'); ?>

<div class="container container_secondary">
  <div class="content_purchases">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="user_container">
          <i class="fas fa-user-circle fa-8x"></i>
          <br><br>
          <span><?php echo e($name); ?></span>
        </div><br>
        <div class="user_container_text">
          <span>My Purchases</span>
        </div>
      </div>
      <div class="col-md-8 col-sm-12">
        <div class="insurance_providers_container">
          <?php $__currentLoopData = $insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="insurance_providers" data-price="<?php echo e($insurance->amount); ?>" data-sum="<?php echo e($insurance->sum_insured); ?>">
            <div class="row">
              <div class="col-md-3 col-sm-12">
                <img src="<?php echo e(url('/images/'.$insurance->logo)); ?>" alt="Brand Image" width="100px;">
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <span><b>Protection Drivers</b></span><br>
                    <span>Up to <?php echo e($insurance->protection); ?> Drivers</span>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <span><b>Towing Service</b></span><br>
                    <span>Up to <?php echo e($insurance->towing); ?> Km</span>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <span><b>Sum Insured (SI):</b></span>
                    <span class="headerfont">RM <?php echo e(number_format($insurance->sum_insured, 2)); ?></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-12">
                <span>Total amount:</span><br>
                <span class="headerfont">RM <?php echo e(number_format($insurance->final_amount, 2)); ?></span><br><br>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <span><b>Ref ID:</b> <?php echo e($insurance->ref_id); ?></span>
              </div>
              <div class="col-md-6 col-sm-12">
                <span><b>Expiring:</b> <?php echo e($insurance->end_date); ?></span>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <small>* Sum insured displayed here are the recommended sum insured by respective insurance companies.</small>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aditya Rawat\Desktop\stillwaters\resources\views/purchases.blade.php ENDPATH**/ ?>
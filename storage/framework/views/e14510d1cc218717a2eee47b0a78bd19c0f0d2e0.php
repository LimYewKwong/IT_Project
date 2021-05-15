<?php $__env->startSection('content'); ?>
<div class="container container_primary">
  <div class="row containerBanner">
    <div class="col-12 bannerTextContainerSecondary">
      <center>
        <span class="bannerText bannerTextSecondary">Contact Us</span>
      </center>
    </div>
  </div>
  <div class="contactContainerBody">
    <div class="row">
      <div class="col-md-4 col-sm-12 footerContainer">
        <div class="footerContent">
          <h3 class="footerHead"><b>Call Us</b></h3><br>
          <span>Tel: 123-456-7890</span><br>
          <span>info@mysite.com</span>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 footerContainer">
        <div class="footerContent">
          <h3 class="footerHead"><b>Visit Us</b></h3><br>
          <span>500 Terry Francois Street</span><br>
          <span>San Francisco, CA 94158</span>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 footerContainer">
        <div class="footerContent">
          <h3 class="footerHead"><b>Opening Hours</b></h3><br>
          <span>Mon - Fri: 7am - 10pm</span><br>
          <span>Sun: 7am - 3pm</span><br><br>
        </div>
      </div>
    </div><br><br>

    <?php if(Session::has('success')): ?>
    <div class="alert alert-success">
      <?php echo e(Session::get('success')); ?>

    </div>
    <?php endif; ?>
    <form action="contact" method="post">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <input type="text" class="form-control" name="name" placeholder="Name">
            <?php if($errors->has('name')): ?>
            <span class="help-block">
              <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <input type="text" class="form-control" name="email" placeholder="Email">
            <?php if($errors->has('email')): ?>
            <span class="help-block">
              <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group<?php echo e($errors->has('subject') ? ' has-error' : ''); ?>">
            <input type="text" class="form-control" name="subject" placeholder="Subject">
            <?php if($errors->has('subject')): ?>
            <span class="help-block">
              <strong><?php echo e($errors->first('subject')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group<?php echo e($errors->has('message') ? ' has-error' : ''); ?>">
            <textarea class="form-control" name="message_content" placeholder="Message" rows="5"></textarea>
            <?php if($errors->has('message')): ?>
            <span class="help-block">
              <strong><?php echo e($errors->first('message')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="update ml-auto mr-auto">
          <button type="submit" class="btn btn-action">Send</button>
        </div>
      </div>
    </form>
  </div><br><br><br><br>
  <div class="row">
    <div class="col-12">
      <div style="width: 100%;">
        <iframe
        width="100%"
        height="600"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=UCSF%20MEdical%20Center%20at%20Mission%20Bay+(DR%20MOTORS)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        ></iframe>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\IT_Project\resources\views/contact.blade.php ENDPATH**/ ?>
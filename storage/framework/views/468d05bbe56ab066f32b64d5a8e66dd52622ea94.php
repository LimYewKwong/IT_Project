<h1># <?php echo e(config('app.name')); ?> - Contact Email</h1><br><br>

Hello Admin,<br>
You received an email from : <?php echo e($name); ?><br>
Here are the details:<br><br>
<b>Name:</b> <?php echo e($name); ?><br>
<b>Email:</b> <?php echo e($email); ?><br>
<b>Subject:</b> <?php echo e($subject); ?><br>
<b>Message:</b> <?php echo e($message_content); ?><br><br>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php /**PATH C:\wamp64\www\stillwaters\resources\views/emails/contact-email.blade.php ENDPATH**/ ?>
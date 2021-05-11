<?php $__env->startSection('content'); ?>

<div class="container container_secondary">
  <div class="content_secondary">
    <div class="payment_container">
      <div class="panel panel-primary panel-primary-insurance">
        <div class="panel-heading panel-heading-insurance">
          <span>Card Details</span>
        </div>
        <div class="panel-body" style="padding: 10px 40px;">
          <br>
          <form id="payment-form" data-secret="<?php echo e($stripe_intent->client_secret); ?>">
            <center>
              <div class="form-group">
                <input type="text" class="form-control" id="cardholder-name" placeholder="Name on card" required>
              </div>
              <div class="form-group">
                <div id="card-element" class="form-control" style='height: 2.4em; padding-top: .7em;'>
                  <!-- A Stripe Element will be inserted here. -->
                </div>
              </div>
              <!-- We'll put the error messages in this element -->
              <div id="card-errors" role="alert" style="color: red;"></div><br><br>

              <button id="card-button" class="btn btn-primary">Pay RM <?php echo e($amount); ?></button>
            </center>
          </form>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
var stripe = Stripe("<?php echo e(env('STRIPE_KEY')); ?>");
var elements = stripe.elements();

var elements = stripe.elements();
var style = {
  base: {
    color: "#32325d",
  }
};

var card = elements.create("card", { style: style });
card.mount("#card-element");


card.on('change', ({error}) => {
  let displayError = document.getElementById('card-errors');
  if (error) {
    displayError.textContent = error.message;
  } else {
    displayError.textContent = '';
  }
});

var form = document.getElementById('payment-form');

form.addEventListener('submit', function(ev) {
  ev.preventDefault();
  // If the client secret was rendered server-side as a data-secret attribute
  // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
  stripe.confirmCardPayment(form.dataset.secret, {
    payment_method: {
      card: card,
      billing_details: {
        name: $("#cardholder-name").val()
      }
    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer (e.g., insufficient funds)
      let displayError = document.getElementById('card-errors');
      displayError.textContent = result.error.message;
      console.log(result.error.message);
    } else {
      // The payment has been processed!
      if (result.paymentIntent.status === 'succeeded') {
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: "POST",
          url: "<?php echo e(route('insurance.store')); ?>",
          data: { payment_id: result.paymentIntent.id },
          success: function (data) {
            location.href = "<?php echo e(route('success')); ?>";
          },
        });
      }
    }
  });
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Final file\5\stillwaters\resources\views/insurances/payment.blade.php ENDPATH**/ ?>
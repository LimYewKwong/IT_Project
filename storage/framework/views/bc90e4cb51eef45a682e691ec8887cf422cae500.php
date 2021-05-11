<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Stillwaters')); ?></title>

  <!-- Styles -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/pages.css')); ?>" rel="stylesheet">


</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
          <!-- Branding Image -->
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <span class="logoFont">STILLWATERS</span>
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav mx-auto" style="font-family: helvetica;">
            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('insurance')); ?>">Car Insurance</a></li>
            <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
            <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">

            

            <!-- Authentication Links -->
            <?php if(Auth::guest()): ?>
            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
            <?php else: ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
               

                <li>
                  <a href="<?php echo e(route('purchases')); ?>">
                    My Purchases
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

                </form>

              </li>
            </ul>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>


  <div class="contentView">
    <?php echo $__env->yieldContent('content'); ?>
  </div>


      <footer>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-4 col-sm-12 footerContainer">
                      <div class="footerContent">
                          <h3 class="footerHead">Get in touch</h3><br>
                          <span>47, Lot 3780, Section 218, </span><br>
                          <span>KNLD Liang Kee Commercial Centre, </span><br>
                          <span>4½ mile Penrissen Road, 93200, </span><br>
                          <span>Kuching, Sarawak.</span>
                      </div>
                  </div>

                  <div class="col-md-4 col-sm-12 footerContainer">
                      <div class="footerContent">
                          <h3 class="footerHead">Opening Hours</h3><br>
                          <span>Mon - Fri: 7am - 10pm</span><br>
                          <span>Sun: 7am - 3pm</span><br><br>
                          <span><a href="https://www.facebook.com/stillwatersfsb/"><i class="fab fa-facebook fa-2x"></i></a></span>&nbsp;&nbsp;&nbsp;
                          <span><a href="https://www.instagram.com/stillwatersfsb/"><i class="fab fa-instagram fa-2x"></i></a></span>
                      </div>
                  </div>

                  <div class="col-md-4 col-sm-12 footerContainer">
                      <div class="footerContent">
                          <h3 class="footerHead">Contact Us</h3><br>
                          <span>500 Terry Francois Street</span><br>
                          <span>San Francisco, CA 94158</span><br><br>
                          <span>Tel: 123-456-7890</span><br>
                          <span>info@mysite.com</span><br><br>
                          <a href="<?php echo e(url('/')); ?>">
                              <span class="logoFont">STILLWATERS</span>
                          </a>
                      </div>
                  </div>

              </div>
              <hr>
              <div class="row">
                  <div class="col-12">
                      <center>
                          <span>© 2023 by STILLWATERS. Proudly created with Laravel</span>
                      </center>
                  </div>
              </div>
          </div>
      </footer>
  </div>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<!-- JQuery import -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.validate.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\stillwaters\resources\views/layouts/app.blade.php ENDPATH**/ ?>
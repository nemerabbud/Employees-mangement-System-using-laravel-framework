<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'NRA Company')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">
                <a class="navbar-brand">
                    <?php echo e(config('app.name', 'NRA Company')); ?>

                </a>

                

                <div class="s45kfl79 emlxlaya bkmhp75w spb7xbtv oaz4zybt pmk7jnqg j9ispegn kr520xx4" style="height:40px;width:40px">
                    <img src="https://commsoft.ca/Public/img/uploaded/Employ%C3%A9s_250x250_Petit.png" alt="" align="right" style="width: 0.45in">
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar  -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="font-weight-bold">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="font-weight-bold">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?> </a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                    <div>
                        <a type="button" class="btn btn-primary btn-lg active"  href="<?php echo e(url('/home')); ?>">Home</a>

                        <a type="button" class="btn btn-secondary btn-lg active"  href="<?php echo e(url('/tasks')); ?>">Tasks</a>

                        <a type="button" class="btn btn-secondary btn-lg active"  href="<?php echo e(url('/contact')); ?>">Messages</a>


                        <div class="btn-group" role="group" aria-labelledby="Basic example">
                                <a type="button" class="btn btn-secondary btn-lg active" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                    </div>
                            </div>
                            <li class="font-weight-bold" >
                                <a id="navbar" class="nav-link" href="<?php echo e(url('/home')); ?>" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 19px" data-toggle="tooltip" data-placement="bottom" title="Home Page">
                                    <?php echo e(Auth::user()->name); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
        mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
    </script>
    <style>
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 30px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #3490dc; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 12px; /* Some padding */
  border-radius: 40px; /* Rounded corners */
  font-size: 17px; /* Increase font size */
}

#myBtn:hover {
  background-color: rgb(56, 56, 56); /* Add a dark-grey background on hover */
}
    </style>
</body>

</html>
<?php /**PATH C:\Users\nemerabbud-pc\hexaEm\resources\views/layouts/app.blade.php ENDPATH**/ ?>
    
    
    

    <!-- [ LOADERs ]

================================================================================================================================-->

<div class="preloader">

    <div class="loader theme_background_color">

        <span></span>


    </div>
</div>
<!-- [ /PRELOADER ]

=============================================================================================================================-->

<!-- [WRAPPER ]

=============================================================================================================================-->

<div class="wrapper">

    <!-- [NAV]

============================================================================================================================-->

    <!-- Navigation
==========================================-->

    <nav class=" nim-menu navbar navbar-default navbar-fixed-top">

        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">O<span class="themecolor">
                    n</span>line Bus Booking</a>

            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="#home" class="page-scroll">
                            <h3>Home</h3>
                        </a>
                    </li>

                    <li>
                        <a href="#two" class="page-scroll">
                            <h3>About</h3>
                        </a>
                    </li>

                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <a href="<?php echo e(url('/user/profile')); ?>" class="page-scroll">
                                <h3>Profile</h3>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" class="page-scroll" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                <h3>Logout</h3>
                            </a>
                        </li>
                        <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                        <li>
                            <a href="<?php echo e(url('/login')); ?>" class="page-scroll">
                                <h3>Login</h3>
                            </a>
                        </li>
                    <?php endif; ?>
                    

                   

                    
                </ul>

            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->

    </nav>



    <!-- [/NAV]
<?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/layouts/main/header.blade.php ENDPATH**/ ?>
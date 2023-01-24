

<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">


        </div>
        <ul class="nav navbar-nav">
            <li class="">
                <a href="individual_reg.php">Sign Up</a>
            </li>
            <li class="active">

                <a href="signin.php">Sign In</a>

            <li>
                <a href="../">Go Back</a>
            </li>
        </ul>
    </div>

</nav>
<div class="signup-page">
    <div class="form">
        <h2>Customer Panel</h2>
        <br>
        <form class="login-form" method="post" role="form" id="signup-form" autocomplete="off">
            <!-- json response will be here -->
            <div id="errorDiv"></div>
            <!-- json response will be here -->

            <div class="col-md-12">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" required name="email">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password">
                    <span class="help-block" id="error"></span>
                </div>
            </div>



            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" id="btn-signup">
                        SIGN IN
                    </button>
                </div>
            </div>
            <p class="message">
                <a href="#">.</a><br>
            </p>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/login.blade.php ENDPATH**/ ?>
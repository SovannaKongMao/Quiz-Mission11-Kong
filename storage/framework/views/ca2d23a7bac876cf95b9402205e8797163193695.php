

<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">


        </div>
        <ul class="nav navbar-nav">
            <li class="">
                <a href="<?php echo e(url('/signup')); ?>">Sign Up</a>
            </li>
            <li class="active">

                <a href="login">Sign In</a>

            <li>
                <a href="<?php echo e(url('/')); ?>">Go Back</a>
            </li>
        </ul>
    </div>

</nav>
<div class="signup-page">
    <div class="form">
        <h2>Customer Panel</h2>
        <br>
        <form class="login-form" method="post" role="form" action="<?php echo e(route('login')); ?>"  autocomplete="off">
            <!-- json response will be here -->
            <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
            <?php endif; ?>
            <?php echo csrf_field(); ?>
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
                    <input type="password" name="password" >
                    <span class="help-block" ></span>
                </div>
            </div>



            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" >
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
<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/user/login.blade.php ENDPATH**/ ?>
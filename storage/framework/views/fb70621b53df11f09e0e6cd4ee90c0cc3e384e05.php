

<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">


        </div>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="<?php echo e(url('/signup')); ?>">Sign Up</a>
            </li>
            <li class="">

                <a href="<?php echo e(url('/login')); ?>">Sign In</a>

            <li>
                <a href="<?php echo e(url('/')); ?>">Go Back</a>
            </li>
        </ul>
    </div>

</nav><div class="signup-page">
<div class="form">
    <h2>Create Account </h2>
    <br>
    <p class="alert alert-info">
        <marquee behavior="" scrollamount="2" direction="">You need to create an account to book/view Buses!
        </marquee>
    </p>
    <form class="login-form" method="post" role="form" action="<?php echo e(route('signup')); ?>" enctype="multipart/form-data" id="signup-form"
        autocomplete="off">
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
                <label>Full Name</label>
                <input type="text" required minlength="5" name="name">
            </div>
        </div>

        
        <div class="col-md-6">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" required name="email">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" minlength="9"  required name="phone_num">
            </div>
        </div>

        
        <div class="col-md-12">
            <div class="form-group">
                <label>Address</label>
                <input type='text' name="address" class="form-group" required>
                </select>
                <span class="help-block" id="error"></span>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="pw" required >
                <span class="help-block" ></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password" id="confirm_pw" required>
                <span class="help-block" ></span>
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" id="btn-signup">
                    CREATE ACCOUNT
                </button>
            </div>
        </div>
        <p class="message">
            <a href="#">.</a><br>
        </p>
    </form>
    
</div>
</div>
<script>
    var password = document.getElementById("pw")
  , confirm_password = document.getElementById("confirm_pw");

    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/user/signup.blade.php ENDPATH**/ ?>
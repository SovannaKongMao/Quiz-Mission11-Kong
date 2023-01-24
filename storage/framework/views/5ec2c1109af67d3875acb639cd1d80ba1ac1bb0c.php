<!DOCTYPE html>

<head lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <meta charset="utf-8">

    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bus Booking System</title>

    <?php echo $__env->yieldContent('styles'); ?>


</head>

<body>

    
    <div class="wrapper">

        <?php echo $__env->make('layouts.main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




        <!-- [/FOOTER]
 
============================================================================================================================-->




    </div>


    <!-- [ /WRAPPER ]

=============================================================================================================================-->


    <!-- [ DEFAULT SCRIPT ] -->
    <?php echo $__env->make('layouts.main.scriptInclude', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>


</html><?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/layouts/main/master.blade.php ENDPATH**/ ?>
<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <?php echo $__env->make('layouts.user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        #edit_button:hover{
            color: #28a745;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ./wrapper -->

    <script src="<?php echo e(asset('/assets/')); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('/assets/')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('/assets/')); ?>/dist/js/adminlte.min.js"></script>
    <script src="<?php echo e(asset('/assets/')); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo e(asset('/assets/')); ?>/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo e(asset('/assets/')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('/assets/')); ?>/dist/js/demo.js"></script>
    <script src="<?php echo e(asset('/assets/')); ?>/dist/js/pages/dashboard3.js"></script>

    <script>
    $(function() {
        $("#example1").DataTable();
    });
    </script>
</body>

</html><?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/layouts/user/dashboard.blade.php ENDPATH**/ ?>
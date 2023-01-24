<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

    <title>Online Ticket Reservation System - Super </title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('/assets/')); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('/assets/')); ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="navbar-nav">
                    <a class="nav-link" href="#">Online Ticket Reservation System</a>

                </li>
            </ul>


            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="admin.php" class="brand-link">

                <span class="brand-text font-weight-light">Sun 16, Oct 22</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="images/trainlg.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="admin.php?page=users" class="nav-link 
                                                        ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin.php?page=dynamic" class="nav-link 
                                                        ">
                                <i class="nav-icon fas fa-calendar-day"></i>
                                <p>
                                    Schedules
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?page=route" class="nav-link      ">
                                <i class="nav-icon fas fa-route"></i>
                                <p>
                                    Routes
                                </p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?page=train" class="nav-link      ">
                                <i class="nav-icon fas fa-train"></i>
                                <p>
                                    Trains 
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin.php?page=report" class="nav-link      ">
                                <i class="nav-icon fas fa-file-pdf"></i>
                                <p>
                                    Report
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="admin.php?page=payment" class="nav-link      ">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>
                                    Payments
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin.php?page=feedback" class="nav-link      ">
                                <i class="nav-icon fas fa-mail-bulk"></i>
                                <p>
                                    Feedbacks
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin.php?page=search" class="nav-link      ">
                                <i class="nav-icon fas fa-search"></i>
                                <p>
                                    Search
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="admin.php?page=logout" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Administrator Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
    <h5 class="mt-4 mb-2">Hi, System Administrator</h5>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Passengers</span>
                    <span class="info-box-number">8</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                                    </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fa fa-train"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Trains</span>
                    <span class="info-box-number">10</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                                    </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Schedules</span>
                    <span
                        class="info-box-number">25</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                                    </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fa fa-dollar-sign"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Payments</span>
                    <span class="info-box-number"> $ 33312</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <!-- /.col-md-6 -->
    </div>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-primary">
                <span class="info-box-icon"><i class="fa fa-route"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Routes</span>
                    <span class="info-box-number">18</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fa fa-comment-dots"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Feedbacks Received</span>
                    <span class="info-box-number">5</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
<!-- /.col -->
</div>
<!-- /.row -->

</div>            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Online Ticket Reservation System            
            </div>
            <!-- Default to the left -->
            <strong>2022 - All Rights Reserved</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
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

</html><?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/layouts/admin/admin.blade.php ENDPATH**/ ?>
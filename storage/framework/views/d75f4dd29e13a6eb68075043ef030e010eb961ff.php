

<?php $__env->startSection('content'); ?>
    <!-- Navbar -->
    <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="#">User Dashboard</a>

            </li>
        </ul>


        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">

            <span class="brand-text font-weight-light"><?php echo e(now()->format('Y-m-d')); ?></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                
                <div class="info"> 
                    <a href="<?php echo e(url('/')); ?>" class="d-block"><?php echo e(strtoupper(Auth::user()->name)); ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="<?php echo e(url('user/profile')); ?>" class="nav-link active">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Profiles
                            </p>
                        </a>

                    </li>
                    

                    
                    <li class="nav-item">
                        <a href="<?php echo e(url('user/bookedHistory/'.Auth::user()->id)); ?>" class="nav-link ">
                            <i class="fa fa-book nav-icon"></i>
                            <p>View Bookings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-mail-bulk nav-icon"></i>
                            <p>Feedback</p>
                        </a>
                    </li>

                    <li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('logout')); ?>" class="nav-link" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                    <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
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
                    <div class="col-sm-6" >
                        <h1 class="m-0 text-dark"> Passenger's Profile</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        
<div class="content">
<div class="container-fluid">
            <div class="row">
        <div class="col-lg-12">

            
                
                <section class="vh-100 profile_card" style="background-color: #f4f5f7;">
                    <div class="container py-5 h-100">
                      <div class="row d-flex   h-100">
                        <div class="col col-lg-6 mb-4 mb-lg-0" >
                          <div class="card mb-3" style="border-radius: .5rem; width: 1000px">
                            <div class="row g-0">
                              <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h5>Hello</h5>
                                <p><?php echo e(strtoupper(Auth::user()->name)); ?></p>
                                <button type="button" style="background-color:transparent;border:none;" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit3">
                                    <i class="far fa-edit mb-5" id="edit_button"></i>
                                </button> 
                                
                              </div>
                              <div class="col-md-8">
                                <div class="card-body p-4">
                                  <h6>Information</h6>
                                  <hr class="mt-0 mb-4">
                                  <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                      <h6>Email</h6>
                                      <p class="text-muted"><?php echo e(Auth::user()->email); ?></p>
                                    </div>
                                    <div class="col-6 mb-3">
                                      <h6>Phone</h6>
                                      <p class="text-muted"><?php echo e(Auth::user()->phone_num); ?></p>
                                    </div>
                                  </div>
                                  <h6>Address</h6>
                                  <hr class="mt-0 mb-4">
                                  <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                      <p class="text-muted"><?php echo e(Auth::user()->address); ?></p>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <div class="modal fade" id ="edit3">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/user/updateProfile/<?php echo e(Auth::user()->id); ?>">
                                                    <!-- Form Group (username)-->
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputUsername">Name (Input your full name ><)</label>
                                                        <input class="form-control" name="update_name" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo e(Auth::user()->name); ?>">
                                                    </div>
                                                    
                                                    
                                                    
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (phone number)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                                            <input class="form-control" name="update_phone" id="inputphone" type="text" placeholder="Enter your phone number" value="<?php echo e(Auth::user()->phone_num); ?>">
                                                        </div>
                                                        <!-- Form Group (birthday)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputBirthday">Email address</label>
                                                            <input class="form-control" id="inputBirthday" type="text" name="update_email" placeholder="Enter your birthday" value="<?php echo e(Auth::user()->email); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputEmailAddress">Address</label>
                                                        <input class="form-control" id="inputEmailAddress" name="update_address" type="text" placeholder="Enter your email address" value="<?php echo e(Auth::user()->address); ?>">
                                                    </div>
                                                    <!-- Save changes button-->
                                                    <input type="submit" class="btn btn-primary" style="background-color: #28a745" value="Save changes">
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    

            
        </div>            </div>
    </div>
</div>
</div>            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mengly\Desktop\Paragon-Learning\year3\web_dev2\Final\bookMeBus\resources\views/user/profile.blade.php ENDPATH**/ ?>
<?php if( $this->ion_auth->logged_in() === TRUE ): ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard -> Framework handri User:</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url('assets/admin/');?>images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/admin/');?>plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/admin/');?>css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/admin/');?>css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?= base_url('assets/admin/');?>css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <script src="<?= base_url('assets/admin/');?>js/jquery-2.1.4.min.js"></script>
        <link href="<?= base_url('assets/admin/');?>css/style.css" rel="stylesheet">
        <link href="<?= base_url('assets/admin/');?>plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/admin/');?>plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/admin/');?>plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/admin/');?>plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/admin/');?>plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/admin/');?>plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/admin/');?>plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
         <style type="text/css">
            .error{
                color: red;
            }
        </style>

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo">
                            <img src="<?php echo base_url('assets/img/logo-pt.jpg')?>" alt="logo" class="logo-lg" style="height: 55px" />
                            <img src="<?php echo base_url('assets/img/logo-pt.jpg')?>" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                   
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                             
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true">
                                    <?php if(empty($data->foto)): ?>
                                        <img class="user-avatar" src="<?php echo base_url('assets/img/users/default.png')?>" class="img-circle" alt="..."/>
                                    <?php else: ?>
                                        <img class="user-avatar" src="<?php echo base_url('assets/img/users/'.$data->foto)?>" class="img-circle" alt="..."/>
                                    <?php endif;?>
                                    
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i>Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Change Password</a></li>
                                        <li><a href="<?php echo base_url('auth/logout/');?>">
                                            <i class="ti-power-off m-r-10"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                     <?php if(empty($data->foto)): ?>
                                        <img class="user-avatar" src="<?php echo base_url('assets/img/users/default.png')?>" class="thumb-md img-circle" alt="..."/>
                                    <?php else: ?>
                                        <img class="user-avatar" src="<?php echo base_url('assets/img/users/'.$data->foto)?>" class="thumb-md img-circle" alt="..."/>
                                    <?php endif;?>
                                </div>
                                <div class="user-info">
                                    <a href="#"><?php echo get_name_by_session()?></a>
                                    
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="index.html"><i class="ti-home"></i> Dashboard </a></li>

                             

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-users"></i> Users <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="#">Group Users</a></li>
                                        <li><a href="<?= base_url('users');?>">Users</a></li>
                                        <li><a href="#">Icons</a></li>
                                        <li><a href="#">Widgets</a></li>
                                    </ul>
                                </li>

    
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <?php $this->load->view($content);?>
                        

                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
       
        <script src="<?= base_url('assets/admin/');?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/admin/');?>js/metisMenu.min.js"></script>
        <script src="<?= base_url('assets/admin/');?>js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
        <script src="<?= base_url('assets/admin/');?>plugins/morris/morris.min.js"></script>
        <script src="<?= base_url('assets/admin/');?>plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?= base_url('assets/admin/');?>pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        
        <script src="<?= base_url('assets/admin/');?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/admin/');?>plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?= base_url('assets/admin/');?>pages/jquery.datatables.init.js"></script>

        <script src="<?= base_url('assets/admin/');?>js/jquery.app.js"></script>

    </body>
</html>
<?php endif; ?>
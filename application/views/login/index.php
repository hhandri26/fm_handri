
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard -> Framework handri User:</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url('admin/');?>assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/admin/css/metisMenu.min.css');?>" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?= base_url('assets/admin/css/icons.css');?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?= base_url('assets/admin/css/style.css');?>" rel="stylesheet">

    </head>


    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="<?= base_url('assets/img/logo-pt.jpg');?>" alt="" height="100"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <div id="infoMessage"><?php echo $message;?></div>
                                    <form class="form-horizontal" action="<?= base_url('auth/login');?>" method="post">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Username</label>
                                                <input class="form-control" type="email" id="identity" name="identity" placeholder="john@deo.com">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <a href="<?= base_url('forgot_password');?>" class="text-muted pull-right font-14">Forgot your password?</a>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-30">
                                            <div class="col-xs-12">
                                                
                                                <?php echo form_checkbox('remember','1',FALSE);?> Remember me
                                                
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?= base_url('assets/admin/js/jquery-2.1.4.min.js');?>"></script>
        <script src="<?= base_url('assets/admin/js/bootstrap.min.js');?>"></script>
        <script src="<?= base_url('assets/admin/js/metisMenu.min.js');?>"></script>
        <script src="<?= base_url('assets/admin/js/jquery.slimscroll.min.js');?>"></script>

        <!-- App Js -->
        <script src="<?= base_url('assets/admin/js/jquery.app.js');?>"></script>

    </body>
</html>
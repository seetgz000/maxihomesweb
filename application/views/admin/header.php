<!DOCTYPE html>
<html>
    <head>
        <title>admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>js/notify.min.js"></script>
        <script src="<?= base_url() ?>js/bootstrapValidator.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/skins/_all-skins.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/js/plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/admin_style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/admin.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/bootstrapValidator.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery-ui.structure.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/jquery-ui.theme.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/richtext.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">


    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a class="logo">
                    <img style="height:80%" src="<?= site_url(); ?>images/logo.png" >
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <ul class="nav navbar-nav pull-right">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="user user-menu">
                            <a href="#">
                                <span class="hidden-xs"><i class="fa fa-user">&nbsp;<?= $this->session->userdata('user')['username']; ?></i></span>
                            </a>
                        </li>
                    </ul>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <!-- <ul class="sidebar-menu">
                        <?php if($this->session->userdata("user_type") == "admin"){ ?>
                        <li><a href="<?= base_url() ?>admin/all"><i class="fa fa-users"></i> <span>Admin</span></a></li>
                        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> <span>User</span></a></li>
                        <?php } ?>
                        <li><a href="<?= base_url() ?>Books/all"><i class="fa fa-book"></i> <span>Books</span></a></li>
                        <li><a href="<?= base_url() ?>access/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                       
                    </ul> -->
                    <ul class="sidebar-menu">            
                        <li><a href="<?= base_url() ?>admin/all"><i class="fa fa-users"></i> <span>Admin</span></a></li>
                        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> <span>User</span></a></li>
                        <li><a href="<?= base_url() ?>AboutSlider/all"><i class="fa fa-book"></i> <span>About Slider</span></a></li>
                        <li><a href="<?= base_url() ?>Location/all"><i class="fa fa-book"></i> <span>Location</span></a></li>
                        <li><a href="<?= base_url() ?>Event/all"><i class="fa fa-book"></i> <span>Event</span></a></li>
                        <li><a href="<?= base_url() ?>Project/all"><i class="fa fa-book"></i> <span>Project</span></a></li>
                        <li><a href="<?= base_url() ?>access/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>                  
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <div class="content-wrapper">



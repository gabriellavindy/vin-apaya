<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <title>Apaya Admin</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>static/admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/admin/css/form.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/admin/css/all_skins.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>static/admin/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/admin/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/admin/plugins/daterangepicker/daterangepicker.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- JavaScript -->
    <script src="<?php echo base_url() ?>static/admin/js/application.js"></script>
    <script src="<?php echo base_url() ?>static/admin/js/app.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/js/bootstrap.min.js"></script>
    <!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    
    <script src="<?php echo base_url() ?>static/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>static/admin/plugins/fastclick/fastclick.js"></script>
    <!--<script src="<?php echo base_url() ?>static/admin/plugins/validation/jquery.validate.min.js" type="text/javascript"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min .js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-red sidebar-mini">
    <div id="wrapper">
        <header class="main-header">
        <!-- Logo -->
            <a href="<?=site_url('admin/dashboard') ?>" class="logo">
                <span class="logo-mini"><b>A</b>P</span>
                <span class="logo-lg"><b>Apaya</b>Photo</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success"></span>
                            </a>
                            <!-- <ul class="dropdown-menu">
                                <li class="header"></li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>Support Team<small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul> -->
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning"></span>
                            </a>
                            <?php /* <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-users text-red"></i> 5 new members joined</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-shopping-cart text-green"></i> 25 sales made</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-user text-red"></i> You changed your username</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>*/ ?>
                        </li>

                        <li class="user-header">
                            <a href="<?=site_url('admin/logout');?>" class="btn"><i class="fa fa-power-off"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left info">
                        <p><?=$userdata->nama;?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <nav>
                    <?php $this->load->view('backend/template/sidebar.php');?>
                </nav>
            </section>
        </aside>

        <?php $this->load->view($content); ?>

        <div class="control-sidebar-bg"></div>
    </div>
</body>
</html>

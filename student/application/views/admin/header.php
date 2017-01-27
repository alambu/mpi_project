<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <base href="<?php echo base_url(); ?>">
    <link rel="shortcut icon" href="assets/images/mpilogo.png">
     <title>Mirpur Polytechnic Institute</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/admin/assets/bootstrapValidator/css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="assets/admin/assets/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
    <link href="assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet">
    <link href="assets/admin/assets/data-tables/DT_bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="assets/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        <script src="assets/admin/js/jquery.js"></script>
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <?php include('toast.php'); ?>
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="admin" class="logo"><span>Admin Panel</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                            <img alt="" src="assets/images/mpilogo.png" height='20' width='30'>
                            <span class="username"><?php echo $this->session->userdata('fullname')?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="javascript:void(0);"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="login/logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
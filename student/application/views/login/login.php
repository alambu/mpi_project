<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<base href="<?php echo base_url();?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="assets/images/mpilogo.png">

    <title> Mirpur Polytechnic Institute </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="login/secure_login" method="post" >
        <h2 class="form-signin-heading">sign in now</h2>
       <div class="img-logos">
           <img src="assets/images/mpilogo.png" class="img-responsive" alt="">
       </div>
        <div class="login-wrap">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Log In</button>

        </div>


      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/admin/js/jquery.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>


  </body>
</html>

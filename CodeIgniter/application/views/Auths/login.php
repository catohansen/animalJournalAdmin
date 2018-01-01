<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()  ?>assets/images/favicon.ico">

    <title>AnimalJournal Admin - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url()  ?>/assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/css/master_style.css">

	<!-- Aries_admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index.html">AnimalJournal<b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
      <?php
      if(isset($_SESSION['success'])){?>
          <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php }else if(isset($_SESSION['error'])){?>
          <div class="alert alert-danger"><?php echo $_SESSION['error'];?></div>
      <?php }?>
    <form action="" method="post" id="signinForm"  class="form-element">
      <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="User name*" id="username" name="username">
        <span class="ion ion-person form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password*" id="password" name="password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" >
			<label for="basic_checkbox_1">Remember Me</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-6">
         <div class="fog-pwd">
          	<a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block margin-top-10" name="login">SIGN IN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
    </div>
    <!-- /.social-auth-links -->

    <div class="margin-top-30 text-center">
    	<p>Don't have an account? <a href="register" class="text-info m-l-5">Sign Up</a></p>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script src="<?php echo base_url()  ?>assets/admin/lib/jquery.js"></script>
<script src="<?php echo base_url()  ?>assets/admin/dist/jquery.validate.js"></script>
<script>

    $().ready(function() {


        // validate signup form on keyup and submit
        $("#signinForm").validate({
            rules: {

                username: {
                    required: true,
                    minlength: 6
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 6 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                }

                //topic: "Please select at least 2 topics"*/
            },
            highlight: function (element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('error')
            }
        });
    });

    </script>

	<!-- jQuery 3 -->
	<!--<script src="<?php echo base_url()  ?>assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>-->
	
	<!-- popper -->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>

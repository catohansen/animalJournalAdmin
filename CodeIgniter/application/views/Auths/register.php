<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()  ?>assets/images/favicon.ico">
	

    <title>Aries Admin - Registration </title>
    <style type="text/css">
        .errorN {
            color: Red;
        }
        .btn-primary {
            color: #fff;
            background-color: #2cabe3;
            border-color: #2cabe3;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-primary:focus, .btn-primary.focus {
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
        }

        .btn-primary.disabled, .btn-primary:disabled {
            background-color: #2cabe3;
            border-color: #2cabe3;
        }

        .btn-primary:active, .btn-primary.active,
        .show > .btn-primary.dropdown-toggle {
            background-color: #0069d9;
            background-image: none;
            border-color: #0062cc;
        }
        .btn {
            display: inline-block;
            font-weight: normal;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            line-height: 1.25;
            border-radius: 0.25rem;
            transition: all 0.15s ease-in-out;
        }
        .btn:focus, .btn:hover {
            text-decoration: none;
        }

        .btn:focus, .btn.focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
        }

        .btn.disabled, .btn:disabled {
            opacity: .65;
        }

        .btn:active, .btn.active {
            background-image: none;
        }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="<?php echo base_url()  ?>assets/admin/pages/samplepage/dist/geodatasource-cr.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	
    <link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/pages/samplepage/dist/geodatasource-countryflag.css">
	
    
    <!--<link rel="stylesheet" href="js/dependancies/bootstrap-select-1.12.4/dist/css/bootstrap-select.min.css">-->
	<!-- Bootstrap 4.0-->
	<!--<link rel="stylesheet" href="ssets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<!-- Bootstrap 4.0-->
	<!--<link rel="stylesheet" href="../../../assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">-->

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/css/master_style.css">

	<!-- Aries_admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/css/skins/_all-skins.css">	
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/pages/samplepage/css/intlTelInput.css">
	<!--<link rel="stylesheet" href="css/countrySelect.css">-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/pages/samplepage/js/dependancies/bootstrap-select-1.12.4/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?php echo base_url()  ?>assets/admin/pages/samplepage/css/countrySelect.css">
	
 


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body >
  <div class="register-logo" style="background-color:gray;">
    <a href="../../index.html"><b>AnimalJournal</b>Admin</a>
  </div>

  <div class="container" >
    <p class="login-box-msg"><center><h2>Register a new membership</h2></center></p>
      <?php
      if(isset($_SESSION['success'])){?>
          <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php }?>

     <?php echo validation_errors('<div class="alert alert-danger">','</div>')?>
    <form  action="" method="POST"  class="form-element"  id="signupForm" >
	<div class="row">
	  <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
        <input type="text" class="form-control" placeholder="First name*" id="firstname" name="firstname" >
        <span class="ion ion-person form-control-feedback "></span>
      </div>
	</div>
	<div class="row">
	     <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
        <input type="text" class="form-control" placeholder="Last name*" id="lastname" name="lastname" >
        <span class="ion ion-person form-control-feedback "></span>
      </div>
	</div>
	<div class="row">
	     <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
        <input type="text" class="form-control" placeholder="User name*" id="username" name="username">
        <span class="ion ion-person form-control-feedback "></span>
      </div>
	</div>
	<div class="row">
	      <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
        <input type="text" class="form-control" placeholder="Business name" id="businessname" name="businessname" >
        <span class="ion ion-person form-control-feedback "></span>
      </div>
	</div>
	<div class="row">
	    <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
        <input type="email" class="form-control" placeholder="Email*" id="email" name="email" >
        <span class="ion ion-email form-control-feedback "></span>
      </div>
	</div>
	<div class="row">
	          <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
        <input type="password" class="form-control" id="password" data-minlength="6" placeholder="Password*" id="password" name="password" >
        <span class="ion ion-locked form-control-feedback "></span>
      </div>
	</div>
	<div class="row">
	    <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">  
			
           <input type="password" class="form-control" placeholder="Retype password*" id="repassword" name="repassword" >
        <span class="ion ion-locked form-control-feedback "></span>
			
      </div>
	</div>
	<div class="row">
	  <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
    <input type="tel" class="form-control" placeholder="" id="phoneNo" name="phoneNo" >
				<span id="valid-msg" name="valid-msg" class="hide" style="color:green;">✓ Valid</span>
		<span id="error-msg" name="error-msg" class="hide" style="color:red;">Invalid</span>
          <input type="hidden" class="form-control" placeholder="" id="phoneNoInter" name="phoneNoInter"  >
      </div>
	</div>
	<div class="row">
	 <div class="form-group has-feedback" style="margin-left:200px;margin-right:200px;">
	
	 
        <!--<span class="ion ion-phone form-control-feedback "></span>-->
	Country: <select name="countrysel" class="selectpicker countrypicker" data-live-search="true" data-default="United States" data-flag="true"></select>
		<!--<select class="selectpicker countrypicker"  data-default="United States" data-flag="true"></select>-->
	</div>
	</div>
    <div class="row">
        <div  class"col-md-12" >
          <div class="checkbox" style="margin-left:220px;margin-right:200px;">
            <input type="checkbox" id="agree" name="agree" >
			<label for="agree">I agree to the <a href="#"><b>Terms</b></a></label>
          </div>
        </div>


    </div>
	  
	  <div class="row">
		 
  
        <!-- /.col -->
		<div class="col-md-4 col-sm-4 col-lg-4">
		</div>
        <div class="col-md-4 col-sm-4 col-lg-4 text-center">
          <button type="submit" name="register" class="btn btn-info btn-block margin-top-10">SIGN UP</button>
        </div>
		<div class="col-md-4 col-sm-4 col-lg-4">
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
    
     <div class="margin-top-20 text-center">
    	<p>Already have an account?<a href="login" class="text-info m-l-5"> Sign In</a></p>
     </div>
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

  <!--  <script src="../../lib/jquery.js"></script>-->
	
	<!--<script src="js/jquery.country.select.min.js"></script>-->
<!--<script>
$(document).ready(function(){
    
  // initialize the country drop-down
  $('#country').countrySelect();
             
});
</script>-->
	
	<script src="<?php echo base_url()  ?>assets/admin/dist/jquery.validate.js"></script>
	<script>
	/*$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});*/

	$().ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();
		jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 && 
    phone_number.match(/^(\+?1-?)?(\([2-9]([02-9]\d|1[02-9])\)|[2-9]([02-9]\d|1[02-9]))-?[2-9]([02-9]\d|1[02-9])-?\d{4}$/);
}, "Please specify a valid phone number");

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: {
					required: true,
					minlength: 2
				},
				lastname:{
					required: true,
					minlength: 2
				},
				username: {
					required: true,
					minlength: 6
				},
				password: {
					required: true,
					minlength: 6
				},
				repassword: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				agree: "required"
				
			},
			messages: {
				firstname:{
					required: "Please enter your firstname",
					minlength: "Your firstname must consist of at least 2 characters"
				},
				lastname:{
					required: "Please enter your lastname",
					minlength: "Your lastname must consist of at least 2 characters"
				},
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 6 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 6 characters long"
				},
				repassword: {
					required: "Please provide a password",
					minlength: "Your password must be at least 6 characters long",
					equalTo: "Passwords doesn't match each other"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
				
				//topic: "Please select at least 2 topics"*/
			},
            highlight: function (element) {
                $(element).parent().addClass('errorN')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('errorN')
            }
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

		/*//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});*/
	});
	</script>
	<script src="<?php echo base_url()  ?>assets/admin/pages/samplepage/js/intlTelInput.js"></script>

	<script>
  $("#phoneNo").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
       geoIpLookup: function(callback) {
         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
           var countryCode = (resp && resp.country) ? resp.country : "";
          callback(countryCode);
         });
       },
       //hiddenInput: "full_number",
		initialCountry: "auto",
      // nationalMode: true,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
       separateDialCode: true,
      utilsScript: "<?php echo base_url()  ?>assets/admin/pages/samplepage/js/utils.js"
    });
var telInput = $("#phoneNo"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");



var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
      var intlNumber = $("#phoneNo").intlTelInput("getNumber");
      document.getElementById("phoneNoInter").value = intlNumber;
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset)

	
</script>



  <!--Scripts-->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="<?php echo base_url()  ?>assets/admin/pages/samplepage/js/dependancies/bootstrap-select-1.12.4/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url()  ?>assets/assets/vendor_components/popper/dist/popper.min.js"></script>
    <!--<script src="../../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
	
	
	
	   <!--Scripts-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="js/dependancies/bootstrap-select-1.12.4/dist/js/bootstrap-select.min.js"></script>-->
    <script src="<?php echo base_url()  ?>assets/admin/pages/samplepage/js/countrypicker.js"></script>
	<!-- jQuery 3 -->
	<!--<script src="../../../assets/vendor_components/jquery/dist/jquery.min.js"></script>-->
	
	<!-- popper -->
	
	
	<!-- Bootstrap 4.0-->
	
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

	
</body>
</html>

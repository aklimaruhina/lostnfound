<?php 

	include('lib/app.php');
	$config = $_SESSION['config'];
	$district = $config['district'];
	if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] == true){
		header('location: user_dashboard.php');
	}
	



?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.6.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Lost and Found </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="css/login-soft.css" rel="stylesheet" type="text/css"/>
<link href="plugins/select2/select2.css" rel="stylesheet" type="text/css"/>


<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="plugins/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="plugins/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="plugins/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- END THEME STYLES -->

</head>
<!-- END HEAD -->



<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.php">
		<h3>Lost and Found</h3>
	</a>
</div>
<!-- END LOGO -->

<!-- BEGIN LOGIN -->
<div class="content" id="login">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="do-login.php" method="POST">
		<h3 class="form-title">Login to your account</h3>

<?php 

 if(isset($_SESSION['msg_success']) AND !empty($_SESSION['msg_success'])):

?>
	<h4 style="color:green"><?php echo $_SESSION['msg_success']; unset($_SESSION['msg_success'])?></h4>
<?php 

 endif; 
if(isset($_SESSION['msg_error']) AND !empty($_SESSION['msg_error'])):
?>
	<h4 style="color:red; font-weight:bold;"><?php echo $_SESSION['msg_error']; unset($_SESSION['msg_error'])?></h4>
<?php 
endif;
 ?>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email Address</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Address" name="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Remember me </label>
			<button type="submit" class="btn blue pull-right" >
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="login-options">
			<h4>Or login with</h4>
			<ul class="social-icons">
				<li>
					<a class="facebook" data-original-title="facebook" href="#">
					</a>
				</li>
				<li>
					<a class="twitter" data-original-title="Twitter" href="#">
					</a>
				</li>
				<li>
					<a class="googleplus" data-original-title="Goole Plus" href="#">
					</a>
				</li>
				<li>
					<a class="linkedin" data-original-title="Linkedin" href="#">
					</a>
				</li>
			</ul>
		</div>
		<div class="forget-password">
			<h4>Forgot your password ?</h4>
			<p>
				 no worries, click <a href="javascript:;" id="forget-password">
				here </a>
				to reset your password.
			</p>
		</div>
		<div class="create-account">
			<p>
				 Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">
				Create an account </a>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="user_dashboard.php" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn blue pull-right">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
</div>
<div class="content " id="reg-form">
	<!-- BEGIN REGISTRATION FORM -->
	<form class="register-form " name="reg_form" action="add_user.php" method="POST" enctype="multipart/form-data">
		<h3>Sign Up</h3>
		
		<div class="row">
			<div class=" col-md-12">
				<div class="col-md-6 col-offset-1">
				    <p>
						 Enter your personal details below:
					</p>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">First Name</label>
						<div class="input-icon">
							<i class="fa fa-font"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="first_name"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">Last Name</label>
						<div class="input-icon">
							<i class="fa fa-font"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="last_name"/>
						</div>
					</div>
					<div class="form-group ">
						<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
						<label class="control-label visible-ie8 visible-ie9">Email</label>
						<div class="input-icon">
							<i class="fa fa-envelope"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">Mobile Number</label>
						<div class="input-icon">
							<i class="fa fa-check"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="Number" name="mobile_number"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">Address</label>
						<div class="input-icon">
							<i class="fa fa-check"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">Zip Code</label>
						<div class="input-icon">
							<i class="fa fa-check"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="Zip Code" name="zip"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">City/Town</label>
						<div class="input-icon">
							<i class="fa fa-location-arrow"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">District</label>
						<select name="district" id="select2_sample4" class="select2 form-control" placeholder= "Select a District">
							<option disabled="disabled" selected="selected" value="NA"></option>
							<?php foreach($district as $district):?>
								<option value="<?php echo $district?>"><?php echo $district?></option>
							<?php endforeach;?>
										
						</select>
					</div>

				</div>
			
		        <div class="row col-md-6">
					<p>
						 Enter your account details below:
					</p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Username</label>
						<div class="input-icon">
							<i class="fa fa-user"></i>
							<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">Password</label>
						<div class="input-icon">
							<i class="fa fa-lock"></i>
							<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
						<div class="controls">
							<div class="input-icon">
								<i class="fa fa-check"></i>
								<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						
						<div class="col-md-3 fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail">
								<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
							</div>	
							<div class="fileupload-preview fileupload-exists thumbnail"></div>
							<div>
								<span class="btn btn-light-grey btn-file">
									<span class="fileupload-new">
							    		<button type="submit" class="btn blue"><i class="fa fa-picture-o"></i> Select Image</button>
									</span>
									<span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
								        <input type="file" name="photo">
							    </span>
							    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
								    <i class="fa fa-times"></i> Remove
							    </a>
						    </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<label>
			<input type="checkbox" name="tnc"/> I agree to the <a href="#">
			Terms of Service </a>
			and <a href="#">
			Privacy Policy </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" id="register-submit-btn" class="btn blue pull-right" >
			Sign Up <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="plugins/jquery.min.js" type="text/javascript"></script>
<script src="plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="plugins/select2/select2.min.js"></script>
<script src="plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="scripts/metronic.js" type="text/javascript"></script>
<script src="scripts/layout.js" type="text/javascript"></script>
<script src="scripts/demo.js" type="text/javascript"></script>
<script src="js/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
 	Login.init();
  	Demo.init();
       // init background slide images
       $.backstretch([
        "img/1.png",
        "img/2.png",
        "img/3.png",
        "img/4.png"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
 <?php
 if(!isset($_SESSION)) {session_start();}
 if(isset($_SESSION['log']))
 {
   if($_SESSION['log']=='locked'){
		 echo '<script>window.top.location.href = "./home";</script>';
   } else {
		 echo '<script>window.top.location.href = "./";</script>';
   }
 }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Funbrain | Auth</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- google login -->
  <meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id" content="583183950791-e5vhhc4s5jeoe5uugu6e1fse239jo1vu.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
  <script>
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			window.location.href = "auth_action.php?g_l="+profile.getEmail()+"&g_img="+profile.getImageUrl()+"";
			var id_token = googleUser.getAuthResponse().id_token;
			console.log("ID Token: " + id_token);
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
				console.log('User signed out.');
			});
		}
	</script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout4/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="auth_action.php" method="post">
		<h3 class="form-title">Sign In</h3>

			<?php
			if(!isset($_SESSION)){session_start();}
			if (isset($_SESSION['msg'])){
				echo '<p class="alert alert-danger">'.$_SESSION["msg"].'</p>';
				unset($_SESSION['msg']);
			} ?>

		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any Email and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email or Phone Number" name="Username" required/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required/>
			<input type="text" name="login" value="" hidden>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success uppercase" name="login1">Login</button>
			<label class="rememberme check">
			<input type="checkbox" name="remember" value="1"/>Remember </label>
			<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
		</div>
		<div class="login-options">
			<div class="mb-2">
								<div class="wells">
									<center><p>or</p><div class="g-signin2" data-onsuccess="onSignIn" data-width="240" data-height="50" data-longtitle="true"></div></center>
								</div>
			</div>
		</div>
		<div class="create-account">
			<p>
				<a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="auth_action.php" method="post">
		<h3>Forgot Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="Email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Back</button>
			<button type="submit" class="btn btn-success uppercase pull-right" name="reset" >Submit</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	<form class="register-form" action="auth_action.php" method="post">
		<h3>Sign Up</h3>
		<p class="hint">
			 Fill this form to register:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Full Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Enter fullname" name="fname" required/>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Phone</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Enter phone number" name="contactno" required/>
		</div>
		<p class="hint">
			 Enter your account details below:
		</p>
    <div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control placeholder-no-fix" type="email" placeholder="Enter email  address" name="Email" required/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Enter Password" name="password"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
		</div>
		<div class="form-group margin-top-20 margin-bottom-20">
			<label class="check">
			<input type="checkbox" name="tnc"/> I agree to the <a href="javascript:;">
			Terms of Service </a>
			& <a href="javascript:;">
			Privacy Policy </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="register-back-btn" class="btn btn-default">Back</button>
			<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right" name="register">Submit</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<div class="copyright" style="color:white">
	 2021 © Funbrain.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<style media="screen">
body {
  background: url("assets/loginbg.jpg") center center/cover no-repeat !important;
}
</style>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

<?php if(!isset($_SESSION)){session_start();}
if (isset($_SESSION['uid'])) {

} else {
	$_SESSION['msg'] = 'Session Expired. Please Login';
	echo "<script type='text/javascript'> document.location ='./login.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Funbrain | Locked</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/admin/pages/css/lock.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div class="page-lock">
	<div class="page-body">
		<div class="lock-head">
			 Locked
		</div>
		<div class="lock-body">
			<div class="pull-left lock-avatar-block">
				<img src="assets/admin/pages/media/profile/photo3.jpg" class="lock-avatar">
			</div>
			<form class="lock-form pull-left" action="./" method="post">
				<h4><?php if (isset($_SESSION['name'])) {
          echo $_SESSION['name'];
        } ?></h4>
				<div class="form-group">
          <input type="text" name="login" value="" hidden>
          <input type="text" name="Email" value="<?php //echo $_SESSION['email']; ?>" hidden>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success uppercase">Login</button>
				</div>
			</form>
		</div>
		<div class="lock-bottom">
			<a href="./logout.php">Not <?php if (isset($_SESSION['name'])) {
        echo $_SESSION['name'];
      } ?>?</a>
		</div>
	</div>
	<div class="page-footer-custom" style="color:white;">
		 2021 &copy; Funbrain.
	</div>
</div>
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
<script src="assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
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

<?php include 'topnav.php'; ?>
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="active">
					<a href="index.php">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Products</span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="product.php">
							<i class="icon-handbag"></i>
							View Products</a>
						</li>
						<li>
							<a href="add_product.php">
							<i class="icon-pencil"></i>
							Add Product</a>
						</li>
					</ul>
				</li>

				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">Product Categories</span>
					</a>
				</li>

								<li class="">
									<a href="javascript:;">
									<i class="icon-envelope-open"></i>
									<span class="title">Messages</span>
									<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="inbox.php">
											<i class="icon-envelope"></i>
											Inbox</a>
										</li>
										<li>
											<a href="ecommerce_products.php">
											<i class="icon-trash"></i>
											Trash</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
									<i class="fa fa-question"></i>
									<span class="title">Help Center</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<i class="fa fa-cog"></i>
									<span class="title">Settings</span>
									</a>
								</li>
			</ul>

			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Inbox <small>user inbox</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="index.php">Messages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Inbox</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row inbox">
						<div class="col-md-2">
							<ul class="inbox-nav margin-bottom-10">
								<li class="compose-btn">
									<a href="javascript:;" data-title="Compose" class="btn green">
									<i class="fa fa-edit"></i> Compose </a>
								</li>
								<li class="inbox active">
									<a href="javascript:;" class="btn" data-title="Inbox">
									Inbox(3) </a>
									<b></b>
								</li>
								<li class="sent">
									<a class="btn" href="javascript:;" data-title="Sent">
									Sent </a>
									<b></b>
								</li>
								<li class="draft">
									<a class="btn" href="javascript:;" data-title="Draft">
									Draft </a>
									<b></b>
								</li>
								<li class="trash">
									<a class="btn" href="javascript:;" data-title="Trash">
									Trash </a>
									<b></b>
								</li>
							</ul>
						</div>
						<div class="col-md-10">
							<div class="inbox-header">
								<h1 class="pull-left">Inbox</h1>
								<form class="form-inline pull-right" action="index.php">
									<div class="input-group input-medium">
										<input type="text" class="form-control" placeholder="Password">
										<span class="input-group-btn">
										<button type="submit" class="btn green"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>
							</div>
							<div class="inbox-loading">
								 Loading...
							</div>
							<div class="inbox-content">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2021 &copy; Funbrain.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN: Page level plugins -->
<script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<!-- BEGIN:File Upload Plugin JS files-->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
    <script src="assets/global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
    <![endif]-->
<!-- END:File Upload Plugin JS files-->
<!-- END: Page level plugins -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/inbox.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   Inbox.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

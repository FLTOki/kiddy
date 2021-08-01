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
					<h1>Add Products <small>Create / Edit product</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Products</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Add Products</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" action="#">
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">
									Add Product </span>
									<span class="caption-helper"></span>
								</div>
								<div class="actions btn-set">
									<button type="button" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Back</button>
									<button class="btn btn-default btn-circle "><i class="fa fa-reply"></i> Reset</button>
									<button class="btn green-haze btn-circle"><i class="fa fa-check"></i> Save</button>
									<button class="btn green-haze btn-circle"><i class="fa fa-check-circle"></i> Save & Continue Edit</button>
									<div class="btn-group">
										<a class="btn yellow btn-circle" href="javascript:;" data-toggle="dropdown">
										<i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
												Duplicate </a>
											</li>
											<li>
												<a href="javascript:;">
												Delete </a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="javascript:;">
												Print </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											General </a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											Content </a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Product Name: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Product Description: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[description]"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Product Category: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select class="bs-select form-control" data-live-search="true" data-size="8">
															<option value="1">Games/Fun</option>
															<option value="2">Games/Learning</option>
															<option value="3">Worksheets</option>
															<option value="4">Clip Arts</option>
															<option value="5">Drawing Books</option>
															<option value="6">Videos</option>
														</select>
													</div>

												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Price: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[price]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Product Type: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="product[tax_class]">
															<option value="">Select...</option>
															<option value="1">Free</option>
															<option value="0">Premium</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Product Rating: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="product[status]">
															<option value="">Select...</option>
															<option value="1">All</option>
															<option value="0">Grade 4 and Beyond</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="tab_images">
											<div class="alert alert-success margin-bottom-10">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
												<i class="fa fa-warning fa-lg"></i> Image and content url need to be specified.
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Image: <span class="required">
												* </span>
												</label>
											<div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
												<a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow">
												<i class="fa fa-plus"></i> Select Image </a>
												<a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
												<i class="fa fa-share"></i> Save Image </a>
											</div>
										</div>
											<div class="row">
												<div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Content Url: <span class="required">
												* </span>
												</label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="product[price]" placeholder="">
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/global/scripts/datatable.js"></script>
<script src="assets/admin/pages/scripts/ecommerce-products-edit.js"></script>

<script src="assets/admin/pages/scripts/components-dropdowns.js"></script>

<script type="text/javascript" src="assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           EcommerceProductsEdit.init();
        });
    </script>
		<script>
			$('.bs-select').selectpicker();
		</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

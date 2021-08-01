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
					<h1>Products <small>product listing</small></h1>
				</div>
				<!-- END PAGE TITLE -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Products</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">View Products</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Products</span>
								<span class="caption-helper">manage products...</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
									<i class="fa fa-share"></i> Tools <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											Export to Excel </a>
										</li>
										<li>
											<a href="javascript:;">
											Export to CSV </a>
										</li>
										<li>
											<a href="javascript:;">
											Export to XML </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											Print Invoices </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Select...</option>
										<option value="publish">Publish</option>
										<option value="unpublished">Un-publish</option>
										<option value="delete">Delete</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_products">
								<thead>
								<tr role="row" class="heading">
									<th width="1%">
										<input type="checkbox" class="group-checkable">
									</th>
									<th width="10%">
										 ID
									</th>
									<th width="15%">
										 Product&nbsp;Name
									</th>
									<th width="15%">
										 Category
									</th>
									<th width="10%">
										 Price
									</th>
									<th width="10%">
										 Quantity
									</th>
									<th width="15%">
										 Date&nbsp;Created
									</th>
									<th width="10%">
										 Status
									</th>
									<th width="10%">
										 Actions
									</th>
								</tr>
								<tr role="row" class="filter">
									<td>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="product_id">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="product_name">
									</td>
									<td>
										<select name="product_category" class="form-control form-filter input-sm">
											<option value="">Select...</option>
											<option value="1">Mens</option>
											<option value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Footwear</option>
											<option value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clothing</option>
											<option value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>
											<option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion Outlet</option>
											<option value="6">Football Shirts</option>
											<option value="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Premier League</option>
											<option value="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Football League</option>
											<option value="9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serie A</option>
											<option value="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bundesliga</option>
											<option value="11">Brands</option>
											<option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adidas</option>
											<option value="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nike</option>
											<option value="14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Airwalk</option>
											<option value="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA Pro</option>
											<option value="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kangol</option>
										</select>
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm" name="product_price_from" placeholder="From"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" name="product_price_to" placeholder="To"/>
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm" name="product_quantity_from" placeholder="From"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" name="product_quantity_to" placeholder="To"/>
									</td>
									<td>
										<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
											<input type="text" class="form-control form-filter input-sm" readonly name="product_created_from" placeholder="From">
											<span class="input-group-btn">
											<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
											</span>
										</div>
										<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
											<input type="text" class="form-control form-filter input-sm" readonly name="product_created_to " placeholder="To">
											<span class="input-group-btn">
											<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
											</span>
										</div>
									</td>
									<td>
										<select name="product_status" class="form-control form-filter input-sm">
											<option value="">Select...</option>
											<option value="published">Published</option>
											<option value="notpublished">Not Published</option>
											<option value="deleted">Deleted</option>
										</select>
									</td>
									<td>
										<div class="margin-bottom-5">
											<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
										</div>
										<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
									</td>
								</tr>
								</thead>
								<tbody>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
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
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/global/scripts/datatable.js"></script>
<script src="assets/admin/pages/scripts/ecommerce-products.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           EcommerceProducts.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

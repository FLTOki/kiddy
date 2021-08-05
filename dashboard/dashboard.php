<!-- BEGIN CONTAINER -->
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
					<h1>Dashboard <small>dashboard & statistics</small></h1>
				</div>
				<!-- END PAGE TITLE -->


			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="index.php">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Dashboard</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp">168,492<small class="font-green-sharp">$</small></h3>
								<small>Total Income</small>
							</div>
							<div class="icon">
								<i class="icon-pie-chart"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
								<span class="sr-only">76% progress</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-red-haze">0</h3>
								<small>Premium Users</small>
							</div>
							<div class="icon">
								<i class="fa fa-money"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 0%;" class="progress-bar progress-bar-success red-haze">
								<span class="sr-only">0%</span>
								</span>
							</div>
							<div class="status">
								<div class="status-number">
									 0%
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp">5</h3>
								<small>Standard Users</small>
							</div>
							<div class="icon">
								<i class="icon-users"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only">100%</span>
								</span>
							</div>
							<div class="status">
								<div class="status-number">
									 100%
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Overview</span>
								<span class="caption-helper">weekly stats...</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="fullscreen">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="tabbable-line">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#overview_1" data-toggle="tab">
										Top Selling </a>
									</li>
									<li>
										<a href="#overview_2" data-toggle="tab">
										Trending Games </a>
									</li>
									<li>
										<a href="#overview_3" data-toggle="tab">
										Top Users </a>
									</li>

								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="overview_1">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Product Name
												</th>
                        <th>Product Category</th>
												<th>
													 Price
												</th>
												<th>
													 Sold
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="javascript:;">
													Math Soccer </a>
												</td>
                        <td>Game/Learning</td>
												<td>
													 Ksh. 5,000
												</td>
												<td>
													 200
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_2">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Product Name
												</th>
												<th>
													 Product Category
												</th>
												<th>
													 Views
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="javascript:;">
													Temple Run 2 </a>
												</td>
												<td>
													 Games/Fun
												</td>
												<td>
													 11190
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Hungry Shark Arena </a>
												</td>
												<td>
													 Games/Fun
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_3">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Customer Name
												</th>
                        <th>Country</th>
                        <th>Plan</th>
												<th>
													 Subscriptions
												</th>
												<th>
													 Total Amount
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="javascript:;">
													Rees Alumasa </a>
												</td>
												<td>
													 Kenya
												</td>
                        <td>Premium</td>
                        <td>2</td>
												<td>
													 $625.50
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title tabbable-line">
							<div class="caption">
								<i class="icon-share font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Revenue</span>
								<span class="caption-helper">weekly stats...</span>
							</div>
							<ul class="nav nav-tabs">

								<li class="active">
									<a href="#portlet_tab1" data-toggle="tab">
										Games
									 </a>
								</li>
								<li>
									<a href="#portlet_tab2" data-toggle="tab" id="statistics_amounts_tab">
									Others </a>
								</li>
							</ul>
						</div>
						<div class="portlet-body">
							<div class="tab-content">
								<div class="tab-pane active" id="portlet_tab1">
									<div id="statistics_1" class="chart">
									</div>
								</div>
								<div class="tab-pane" id="portlet_tab2">
									<div id="statistics_2" class="chart">
									</div>
								</div>
							</div>
							<div class="well margin-top-10 no-margin no-border">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6 text-stat">
										<span class="label label-success">
										Total Revenue: </span>
										<h3>KES 111K</h3>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 text-stat">
										<span class="label label-info">
										Total Tax: </span>
										<h3>KES 14K</h3>
									</div>
								</div>
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
		 2021 &copy;Funbrain
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
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
<script src="assets/global/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/global/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="assets/global/plugins/flot/jquery.flot.categories.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/ecommerce-index.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           EcommerceIndex.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

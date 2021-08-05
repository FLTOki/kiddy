<?php
include 'parentalcontroltest.php';
$mysqli =connect_func();

// SQL query to select data from database
$sql = "SELECT * FROM user where user_id = '".$_SESSION['uid']."'";
$result1 = $mysqli->query($sql);

$sql2 = "SELECT * FROM kids where parent_id = '".$_SESSION['uid']."' order by kid_id desc";
$result3 = $mysqli->query($sql2);
$mysqli->close();

?>

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
          <a href="javascript:;">
          <i class="icon-home"></i>
          <span class="title">Dashboard</span>
          <span class="arrow open"></span>
          </a>
          <ul class="sub-menu">
            <li class="active">
              <a href="#">
              <i class="icon-handbag"></i>
              My Kids</a>
            </li>
            <li>
              <a href="permissions.php">
              <i class="icon-pencil"></i>
              Manage Kids</a>
            </li>
          </ul>
        </li>

				</li>
				<li>
					<a href="subscriptions.php">
					<i class="icon-basket"></i>
					<span class="title">My Subscriptions</span>
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
											<a href="inbox.php">
											<i class="icon-trash"></i>
											Trash</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="help.php">
									<i class="fa fa-question"></i>
									<span class="title">Help Center</span>
									</a>
								</li>
								<li>
									<a href="profile.php">
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
			<!-- BEGIN PAGE CONTENT-->
  <div class="page-content">
  <div class="portlet-body form">
			<div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img
                  src="https://bootdey.com/img/Content/avatar/avatar7.png"
                  alt="Admin"
                  class="rounded-circle"
                  width="150"
                />
                <?php // LOOP TILL END OF DATA
								$uid='';
        while ($rows = mysqli_fetch_array($result1)) {
					$uid = $rows['user_id'];
        ?>
                <div class="mt-3">
                  <h4><?php echo $rows['first_name']." ".$rows['last_name'] ; ?></h4>
                  <p class="text-secondary mb-1">Parent</p>
                  <p class="text-muted font-size-sm">
                  <?php echo $rows['location']; ?>
                  </p>
                </div>
                <?php }
        ?>
         <div class="pt-5 pb-3">
        <a class="btn btn-primary" href="profile.php">Edit Profile</a>
    </div>
              </div>
            </div>
          </div>
        </div>
				<div class="col-md-8">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>My Kids
							</div>
							<div class="tools">
							</div>
						</div>

						<div class="portlet-body">

							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button id="sample_editable_1_new" class="btn green" data-toggle="modal" href="#responsive">
											Add New <i class="fa fa-plus"></i>
											</button>

											<div id="responsive" class="modal fade" tabindex="-1" data-backdrop="static" data-width="760">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Add Kid</h4>
								</div>
								<form action="kids_action.php" method="post" class="form-horizontal">
								<div class="modal-body">
									<div class="row">
									<input type="text" name ="userid" value ="<?php echo  $uid;?>" hidden>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">First Name</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon input-circle-left">
															<i class="fa fa-user"></i>
															</span>
															<input type="text" name="fname" class="form-control input-circle-right" placeholder="First Name" required>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Last Name</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon input-circle-left">
															<i class="fa fa-user"></i>
															</span>
															<input type="text" name="sname" class="form-control input-circle-right" placeholder="Last Name" required>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Age</label>
													<div class="col-md-4">
														<div class="input-icon">
															<i class="fa fa-calender"></i>
															<input type="text" name="kage" class="form-control input-circle" placeholder="Age">
														</div>
													</div>
												</div>
											</div>

									</div>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
									<button type="submit" class="btn blue" name ="save">Save changes</button>
								</div>
								</form>
							</div>
										</div>
										<p></p>
										<?php
										if(!isset($_SESSION)){session_start();}
										if(isset($_SESSION['msg'])){
											echo $_SESSION['msg'];
											unset($_SESSION['msg']);
											}
										 ?>
									</div>
									<div class="col-md-6">
									</div>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									 First Name
								</th>
								<th>
									 Second Name
								</th>
								<th>
									 Age
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                <?php // LOOP TILL END OF DATA
                  while ($rows3 = mysqli_fetch_array($result3)) {
                    if($rows3['kid_age']!=''){
                      $age = $rows3['kid_age'] . " Years";
                    } else {
                      $age = 'Not set';
                    }
                  ?>
							<tr>
                <td><?php  echo $rows3['first_name'];?></td>
                <td><?php  echo $rows3['last_name'];?></td>
                <td><?php  echo $age;?></td>
                <td>
                    <a href="permissions.php?id=<?php  echo $rows3['kid_id'];?> " class="btn btn-primary btn-sm">Manage <i class="icon-pencil"></i> </a>
                    <button type="button" data-target="#static<?php echo $rows3['kid_id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete <i class="icon-trash"></i> </button>
										<div id="static<?php echo $rows3['kid_id']; ?>" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
											<form action="kids_action.php" method="post">
												<div class="modal-body">
													<p>
														 Are you sure you want to delete <?php  echo $rows3['first_name'];?>?
													</p>
												</div>
												<div class="modal-footer">
													<input type="text" name="userid" value="<?php echo $rows3['kid_id']; ?>" hidden>
													<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
													<button type="submit" class="btn blue" name="delete">Yes</button>
												</div>
											</form>

							</div>
                    <?php };?>

                </td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
    </div>
    </div>
  </div>
  </div><script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
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
<script type="text/javascript" src="assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>

<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/table-advanced.js"></script>

<script src="assets/admin/pages/scripts/ui-extended-modals.js"></script>
<script>
        jQuery(document).ready(function() {
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           TableAdvanced.init();
					 UIExtendedModals.init();
        });
    </script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

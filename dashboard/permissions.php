<?php include 'topnav.php'; ?>
<?php
include 'parentalcontroltest.php';
$kid_id = $_GET['id'];

$mysqli =connect_func();
  $message = '';

// SQL query to select data from database
$sql4 = "SELECT * FROM kids where kid_id = '$kid_id' ";
$result4 = $mysqli->query($sql4);
$result = $mysqli->query($sql4);
$sql5 = "SELECT * FROM controls where kid_id = '$kid_id' ";
$result5 = $mysqli->query($sql5);

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
          <a href="./">
          <i class="icon-home"></i>
          <span class="title">Dashboard</span>
          <span class="arrow open"></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="./">
              <i class="icon-handbag"></i>
              My Kids</a>
            </li>
            <li  class="active">
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
		<div class="page-content">
<div class="portlet-body form">
  <?php if(isset($_GET['id'])){
    $chg='<input type="checkbox" id="check1" name="games" value="games"  >';
    $chp = '<input type="checkbox" id="check2" name="puzzles" value= "puzzles" >';
    $cho = '<input type="checkbox" id="check3" name="other" value="other">';
   ?>
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
            while ($rows = mysqli_fetch_array($result)) {

            ?>
                    <div class="mt-3">
                      <h4><?php echo $rows['first_name']." ".$rows['last_name'] ; ?></h4>
                      <p class="text-muted font-size-sm">
                      <?php echo "<b>Age:</b>".$rows['kid_age']; ?>
                      </p>
                    </div>

            </hr>
            <?php };?>
                        <?php while ($rows5 = mysqli_fetch_array($result5)) {
            ?>
            <p><b>Allowed Content:</b></p>
                      <ul>
                  <?php if ($rows5['games']== 1){
                    $chg='<input type="checkbox" id="check1" name="games" value="games"  checked>';
                    ?>
                        <p> > Games</p> <?php }else {
                          $chg='<input type="checkbox" id="check1" name="games" value="games"  >';
                        }
                        ?>
                        <?php if ($rows5['puzzles']== 1){
                          $chp = '<input type="checkbox" id="check2" name="puzzles" value= "puzzles" checked>';
                          ?>
                        <p> > Puzzles</p> <?php }
                        else {
                          $chp = '<input type="checkbox" id="check2" name="puzzles" value= "puzzles" >';
                        }
                        ?>
                        <?php if ($rows5['other']== 1){
                          $cho = '<input type="checkbox" id="check3" name="other" value="other" checked>';
                          ?>
                        <p>  > Other</p> <?php } else {
                          $cho = '<input type="checkbox" id="check3" name="other" value="other">';
                        }?>
                      </ul>

            <?php };?>
            <div class="pt-5 pb-3">
            <a class="btn btn-primary" href="./">Go Back</a>
            </div>
              </div>
            </div>
              </div>
    </div>
    <div class="col-md-8">
      <!-- BEGIN FORM-->
      <form class="horizontal-form" action="kids_action.php" method ="POST">
        <div class="form-body">
          <h3 class="form-section">Update Kids Details</h3>
          <p></p>
          <?php
          if(!isset($_SESSION)){session_start();}
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            }
           ?>
          <div class="row">
            <div class="col-md-6">
              <?php while ($rows4 = mysqli_fetch_array($result4)) {
                ?>
              <div class="form-group">
                <label class="control-label">First Name</label>
                <input type="text" id="firstName" name =fname class="form-control" placeholder="First Name" value ="<?php echo $rows4['first_name'];?>">
                <span class="help-block">
                Enter First Name </span>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">

               <input type="hidden" name =kid class ="form-control" value ="<?php echo $rows4['kid_id'];?>">
                <label class="control-label">Last Name</label>
                <input type="text" id="lastName" name ="sname" class="form-control" placeholder="Last Name" value ="<?php echo $rows4['last_name']?>">
                <span class="help-block">
                Enter Last Name </span>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
										<label>What can my child view?</label>
										<div class="checkbox-list">
											<label>
                        <?php echo $chg; ?>
											    Games </label>
											<label>
                        <?php echo $chp; ?>
											Puzzles </label>
											<label>
                        <?php echo $cho; ?>
											Other </label>
										</div>
							</div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Age</label>
                <input type="text" name ="kage" class="form-control" placeholder="Enter Age" value ="<?php echo $rows4['kid_age'];?>">
              </div>
            </div>
            <!--/span-->
          </div>
          <?php };?>
          </div>
        </div>

        <div class="form-actions right">
          <button type="button" class="btn default">Cancel</button>
          <button type="submit" name ="update" class="btn blue"><i class="fa fa-check"></i> Save</button>
        </div>
      </form>
      <!-- END FORM-->
    </div>
  <?php } else {
    echo "No kid selected";
  } ?>
  </div>


									</div>
</div></div></div>
<?php include 'footer.php'; ?>

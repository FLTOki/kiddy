<?php
if(!isset($_SESSION)) {session_start();}
if(isset($_SESSION['log']))
{
  if($_SESSION['log']=='locked'){
  } else {
		$_SESSION['msg'] = 'Session Expired. Please Login';
    echo '<script>window.top.location.href = "../login.php";</script>';
    die();
  }
} else {
	$_SESSION['msg'] = 'Session Expired. Please Login';
  echo '<script>window.top.location.href = "../login.php";</script>';
  die();
}
 ?>

 <?php


 if(isset($_GET['kidid'])){
   include '../parentalcontroltest.php';
   $mysqli =connect_func();

   // SQL query to select data from database
   $sql = "SELECT * FROM user where user_id = '".$_SESSION['uid']."'";
   $result1 = $mysqli->query($sql);

   $sql2 = "SELECT * FROM kids where parent_id = '".$_SESSION['uid']."' order by kid_id desc";
   $result3 = $mysqli->query($sql2);

   if(isset($_GET['id'])){
     $kid_id = $_GET['id'];
     $sql4 = "SELECT * FROM kids where kid_id = '$kid_id' and parent_id = '".$_SESSION['uid']."'";
     $result4 = $mysqli->query($sql4);
     if(mysqli_num_rows($result4)>0){
       while ($rows3a = mysqli_fetch_array($result4)) {
         $sql5 = "SELECT * FROM controls where kid_id = '".$rows3a['kid_id']."'";
         $result5 = $mysqli->query($sql5);
       }
     }else {
       $_GET['id'] = 'all';
     }


   }

   $mysqli->close();

   ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8"/>
  <title>Funbrain | Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta content="" name="description"/>
  <meta content="" name="author"/>
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN THEME STYLES -->
  <link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
  <link href="../assets/admin/pages/css/inbox.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
  <link href="../assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
  <link id="style_color" href="../assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>

  <link href="../assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="../assets/global/plugins/select2/select2.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

  <link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <!-- END THEME STYLES -->
  <link rel="shortcut icon" href="favicon.ico"/>
</head>
  <body>
  <div class="bg">
    <div class="content">
      <!-- partial:index.partial.html -->
      <header>
  			<div class="page-top">
  			<div class="top-menu" style="z-index: 11020; position:relative;">
  				<ul class="nav navbar-nav pull-right" style="color:white;list-style-type:none;">
  					<li class="dropdown dropdown-user ">
  					<li class="dropdown dropdown-user ">
  						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
  						<span class="username username-hide-on-mobile">
  					 </span>
  						<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
  						<img alt="" class="img-circle" src="../assets/admin/layout4/img/avatar9.jpg"/>
  						</a>
  						<ul class="dropdown-menu dropdown-menu-default">
  							<li>
  								<a href="extra_profile.php">
  								<i class="icon-user"></i> 	<?php if (isset($_SESSION['name'])) {
  										echo $_SESSION['name'].'(Parent)';
  									} ?> </a>
  							</li>
  								<li>
  									<a>
  									<b></i> Select user </a></b>
  								</li>
                  <?php // LOOP TILL END OF DATA
                    while ($rows3 = mysqli_fetch_array($result3)) {
                      if($rows3['kid_age']!=''){
                        $age = $rows3['kid_age'] . " Years";
                      } else {
                        $age = 'Not set';
                      }
                    ?>
                    <li>
      								<a href="index.php?id=<?php echo $rows3['kid_id'] ; ?>">
                      <?php  echo $rows3['first_name']." ".$rows3['last_name']?>
                      </a>
      							</li>

                  <?php } ?>
  							<li>
  								<a href="index.php?id=all">
  									All
  								</a>
  							</li>
  							<li class="divider">
  							</li>
  							<li>
  								<a data-toggle="modal" href="#responsive">
  								<i class="fa fa-unlock"></i> Unlock </a>
  							</li>
  							<li>
  								<a href="../logout.php">
  								<i class="icon-key"></i> Log Out </a>
  							</li>
  						</ul>
  					</li>

          </ul>
  				<div id="responsive" class="modal fade" tabindex="-1" data-backdrop="static" data-width="760">
  					<div class="modal-header">
  						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
  						<h4 class="modal-title">Unlock Parental Controls</h4>
  					</div>
  				<form action="../auth_action.php" method="post" class="form-horizontal">
  				<div class="modal-body">
  					<div class="row">

  					<input type="text" name="Username" value="<?php echo $_SESSION['email']; ?>" hidden>
  							<div class="form-body">
  								<div class="form-group">
  									<label class="col-md-3 control-label">Password</label>
  									<div class="col-md-4">
  										<div class="input-group">
  											<span class="input-group-addon input-circle-left">
  											<i class="fa fa-key"></i>
  											</span>
  											<input type="password" name="password" class="form-control input-circle-right" placeholder="Enter password to unlock" required>
  										</div>
  									</div>
  								</div>
  							</div>

  					</div>
  				</div>
  				<div class="modal-footer">
  					<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
  					<button type="submit" class="btn blue" name ="login">Unlock</button>
  				</div>
  				</form>
  			</div>
  			</div>
  		</div>
      </header>

      <div class="logo-container">
        <div class="main-logo"></div>

      </div>
      <center><h1>Funbrain <?php echo $_GET['cat']; ?></h1></center>

      <div class="sleep">

        <div  class="clock" onload="showTime()"> <h1 style="color:white;">Time to sleep</h1><span id="MyClockDisplay"></span> </div>
      </div>
      <?php  ?>
      <?php
      $perm = '';
      $chg=$chp=$cho='not';
      if(isset($_GET['kidid']) && $_GET['kidid']!='all'){

      }else {
    echo '<center><p style="color:white;">Select an account from the top-right corner to continue</p><center>';
    }?>
  <style media="screen">
    .nozt {
      cursor: not-allowed!important;
      opacity: 0.4;
      pointer-events: none;
    }
  </style>
        <div class="container" id="vue">
            <div class="input-container">
              <input type="search" name="" autocomplete="off" id="search" placeholder="Search a title, description, or category" v-model="liveSearchString" />
            </div>
            <div class="loading" v-show="loading"></div>
            <div class="images-wrapper" v-show="!loading">

            <transition-group name="image-wrapper" tag="div">
            </transition-group>
                <div class="last-visited-grid">
                <div v-for="(image, i) in truncatedFilteredImages" :key="image.id + i">

                  <a href="#"
                  data-toggle="modal"
                  :data-target="'#' + image.modal_id" v-on:click="startVideo('fr'+image.modal_id, image.modal_url)">
                  <div class="app dropbox <?php echo $chg; ?>">
                    <img :src="image.bigUrl" />
                    <span>{{ image.name }}</span>
                  </div>
                </a>
                <div :id="image.modal_id"
                     class="modal animated bounceIn game"
                     tabindex="-1"
                     role="dialog"
                     :aria-labelledby="'h'+image.modal_id"
                     aria-hidden="true">

                  <!-- dialog -->
                  <div class="game modal-dialog">

                    <!-- content -->
                    <div class="game modal-content">

                      <!-- header -->
                      <div class="game modal-header">
                        <h1 :id="'h'+image.modal_id"
                            class="modal-title">
                          {{ image.name }}
                        </h1>
                        <p class="text-left text-muted" style="color:!important;"><?php echo $_GET['name'] ?></p>
                      </div>
                      <!-- header -->

                      <!-- body -->
                      <div class="game modal-body">
                      <iframe src="" width="100%" height="100%" :id="'fr' + image.modal_id"  sandbox="allow-scripts allow-forms	 allow-same-origin" allowfullscreen></iframe>
                      </div>
                      <!-- body -->

                      <!-- footer -->
                      <div class="game modal-footer">

                        <button class="btn btn-danger"
                                data-dismiss="modal" v-on:click="stopVideo('fr'+image.modal_id)">
                          Exit
                        </button>
                        <button class="btn btn-primary">
                          Restart
                        </button>
                      </div>
                      <!-- footer -->

                    </div>
                    <!-- content -->

                  </div>
                  <!-- dialog -->

                </div>
                <!-- modal -->
              </div>
            <a href="../">
              <div class="app amazon">
                <img src="img/home.ico" />
                <span>Home</span>
              </div>
            </a>


            </div>
            </div>

            <center><div class="load-wrapper" v-show="!loading && liveSearchString == ''">
              <div class="button-wrapper" v-if="!allLoaded">
                <button class="btn btn-primary " @click="showMore()">Load More</button>
              </div>
              <p v-else>ALL LOADED</p>
            </div>
            <div id="imageLoaderDock" style="display: none"></div></center>
        </div>
        <div class="row">
          <p></p>
        </div>
        <!-- partial -->
          <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.js'></script>
          <script  src="./script.js"></script>
      <footer style="">
  		<center><p style="color:white"><span id="time"></span><br><br>&copy 2021 Funbrain  </p></center>
  	</footer>
  <!-- partial -->
  <script>
  function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";

    if(h == 0){
        h = 12;
    }

    if(h > 12){
        h = h - 12;
        session = "PM";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
  	document.getElementById("time").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);

  }

  showTime();
  </script>



  <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
  <script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script type="text/javascript" src="../assets/global/plugins/select2/select2.min.js"></script>
  <script type="text/javascript" src="../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
  <script type="text/javascript" src="../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
  <script type="text/javascript" src="../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
  <script type="text/javascript" src="../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->

  <script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>

  <script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
  <script src="../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
  <script src="../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
  <script src="../assets/admin/pages/scripts/table-advanced.js"></script>

  <script src="../assets/admin/pages/scripts/ui-extended-modals.js"></script>
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
    </div>
  </div>
  </body>

  <!-- END BODY -->
  </html>
<?php
}
else {
  echo "Inalid Url";
}
 ?>

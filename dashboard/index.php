<?php include 'topnav.php'; ?>


<?php
  if(isset($_SESSION['role'])){
    if($_SESSION['role']=='admin'){
      include 'dashboard.php';
    } else {
      include 'mykids.php';
    }
  }
?>

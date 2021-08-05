<?php
  if(!isset($_SESSION)){session_start();}
  $_SESSION['log'] = 'locked';
  echo "<script type='text/javascript'> document.location ='./home'; </script>";
 ?>

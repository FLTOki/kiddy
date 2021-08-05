<?php
include 'parentalcontroltest.php';

if(isset($_POST['update'])){

  $childid=$_POST['kid'];
  $firname=$_POST['fname'];
  $secname=$_POST['sname'];
  $age=$_POST['kage'];


  if(isset($_POST['puzzles'])){
    $puzzle=$_POST['puzzles'];
  } else {
    $puzzle='';
  }
  if(isset($_POST['games'])){
    $game=$_POST['games'];
  } else {
    $game='';
  }
  if(isset($_POST['other'])){
    $other=$_POST['other'];
  } else {
    $other='';
  }
  if(updatepermissions_func( $childid,$firname,$secname,$age,$game,$puzzle,$other)=='success'){
    if(!isset($_SESSION)){session_start();}
    $_SESSION['msg'] = '<div class="alert alert-info">
            <strong>Success!</strong> Profile has been updated.
          </div>';
  } else {
    if(!isset($_SESSION)){session_start();}
    $_SESSION['msg'] = '<div class="alert alert-danger">
            <strong>Error!</strong> Update failed... Please try again.
          </div>';
  }
  header('location:permissions.php?id='.$childid.'');

}
if(isset($_POST['save']))
{
    $parid=$_POST['userid'];
    $firname=$_POST['fname'];
    $secname=$_POST['sname'];
    $kidage=$_POST['kage'];

    if(enrol_kid_func($parid,$firname,$secname,$kidage)=='success'){
      if(!isset($_SESSION)){session_start();}

      $_SESSION['msg']= '<div class="alert alert-info">
              <strong>Success!</strong> Record added.
            </div>';
    } else {
      if(!isset($_SESSION)){session_start();}

      $_SESSION['msg']= '<div class="alert alert-danger">
              <strong>Error!</strong> Insertion failed. Please try again.
            </div>';

    }
      header('location:./');

}
if(isset($_POST['delete']))
{
    $parid=$_POST['userid'];

    if(deleteKid($parid)=='success'){
      if(!isset($_SESSION)){session_start();}
      $_SESSION['msg']= '<div class="alert alert-info">
              <strong>Success!</strong> Record deleted.
            </div>';
    } else {
      if(!isset($_SESSION)){session_start();}
      $_SESSION['msg']= '<div class="alert alert-danger">
              <strong>Error!</strong> Could not delete record.
            </div>';
    }
    header('location:./');

}
 ?>

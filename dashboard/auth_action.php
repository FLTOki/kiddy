<?php
include('includes/dbconnection.php');
if(isset($_POST['register']))
  {
    $fname=$_POST['fname'];
    $contno=$_POST['contactno'];
    $email=$_POST['Email'];
    $password=md5($_POST['password']);
    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FullName, MobileNumber, Email,  Password) value('$fname', '$contno', '$email', '$password' )");
    if ($query) {
    if(!isset($_SESSION)){session_start();}
    $_SESSION['msg'] = 'You have successfully registered';
    echo "<script type='text/javascript'> document.location ='./login.php'; </script>";

  }
  else
    {
      if(!isset($_SESSION)){session_start();}
      $_SESSION['msg'] = 'Something Went Wrong. Please try again';
      echo "<script type='text/javascript'> document.location ='./login.php'; </script>";
    }
}
}
if(isset($_POST['login']))
  {
    $emailcon=$_POST['Username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select * from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      if(!isset($_SESSION)){session_start();}
      $_SESSION['uid']=$ret['ID'];
      $_SESSION['name']=$ret['FullName'];
     echo "<script type='text/javascript'> document.location ='./'; </script>";
    }
    else{
      if(!isset($_SESSION)){session_start();}
      $_SESSION['msg'] = 'Invalid Details';
      echo "<script type='text/javascript'> document.location ='./login.php'; </script>";
    }
  }
  if(isset($_GET['g_l']))
    {
      $emailcon=$_GET['g_l'];
      //$password=md5($_POST['password']);
      $query=mysqli_query($con,"select * from tbluser where  Email='$emailcon'");
      $ret=mysqli_fetch_array($query);
      if($ret>0){
        if(!isset($_SESSION)){session_start();}
        $_SESSION['uid']=$ret['ID'];
        $_SESSION['name']=$ret['FullName'];
       echo "<script type='text/javascript'> document.location ='./'; </script>";
      }
      else{
        if(!isset($_SESSION)){session_start();}
        $_SESSION['msg'] = 'User does not exist. Register first to use google auth';
        echo "<script type='text/javascript'> document.location ='./login.php'; </script>";
      }
    }
  ?>

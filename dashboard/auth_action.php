<?php
include('includes/dbconnection.php');
function split_name($name) {
    $name = trim($name);
    $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
    $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
    return array($first_name, $last_name);
}

if(isset($_POST['register']))
  {
    date_default_timezone_set('Africa/Nairobi');
    $t=time();
    $regdate =date("Y-m-d H:i:s",$t);
    $name=ucwords($_POST['fname'], " ");
    $data = split_name($name);
    $first_name = $data[0];
    $last_name= $data[1];
    $phone=$_POST['contactno'];
    $email=strtolower($_POST['Email']);
    $password=md5($_POST['password']);
    $ret=mysqli_query($con, "select * from user where email='$email' || phone='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
      $_SESSION['msg'] = 'This email or Contact Number already associated with another account';
      echo "<script type='text/javascript'> document.location ='./login.php'; </script>";
    }
    else{
    $query=mysqli_query($con, "insert into user(first_name,last_name,email,pwd,role,phone,regdate) value('$first_name','$last_name','$email','$password','parent','$phone','$regdate')");
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
    $emailcon=strtolower($_POST['Username']);
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select * from user where  (email='$emailcon' || phone='$emailcon') && pwd='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      if(!isset($_SESSION)){session_start();}
      $_SESSION['uid']=$ret['user_id'];
      $_SESSION['name']=$ret['first_name']." ".$ret['last_name'];
      $_SESSION['email'] =$ret['email'];
      $_SESSION['role'] = $ret['role'];
      $_SESSION['phone'] = $ret['phone'];
      $_SESSION['log'] = 'unlocked';
      if($ret['role'] == 'admin') {
        echo "<script type='text/javascript'> document.location ='./'; </script>";
      } else {
        echo "<script type='text/javascript'> document.location ='./home'; </script>";
      }

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
      $query=mysqli_query($con,"select * from user where  email='$emailcon'");
      $ret=mysqli_fetch_array($query);
      if($ret>0){
        if(!isset($_SESSION)){session_start();}
        $_SESSION['uid']=$ret['user_id'];
        $_SESSION['name']=$ret['first_name']." ".$ret['last_name'];
        $_SESSION['email'] =$ret['email'];
        $_SESSION['role'] = $ret['role'];
        $_SESSION['phone'] = $ret['phone'];
        $_SESSION['log'] = 'unlocked';
        if($ret['role'] == 'admin') {
          echo "<script type='text/javascript'> document.location ='./'; </script>";
        } else {
          echo "<script type='text/javascript'> document.location ='./home'; </script>";
        }
      }
      else{
        if(!isset($_SESSION)){session_start();}
        $_SESSION['msg'] = 'User does not exist. Register first to use google auth';
        echo "<script type='text/javascript'> document.location ='./login.php'; </script>";
      }
    }
  ?>

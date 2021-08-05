<?php
session_start();
include 'parentalcontroltest.php';
$mysqli =connect_func();

// SQL query to select data from database
$sql = "SELECT * FROM user where user_id = 2";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql);

$mysqli->close();

if(isset($_POST['save']))
{
    $parid=$_POST['userid'];
    $firname=$_POST['fname'];
    $secname=$_POST['sname'];
    $kidage=$_POST['kage'];

    enrol_kid_func($parid,$firname,$secname,$kidage);
header('mykids.php');
$_SESSION['message']= "Record has been saved";
$_SESSION['msg_type']= "Success";


}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parental Controls</title>

    <link rel="stylesheet" href="parent_controls.css" />
    <link
      rel="stylesheet"
      href="../assets/css/node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <!-- Theme -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css" />
    <link
      rel="stylesheet"
      href="../assets/css/theme/css/owl.carousel.min.css"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/theme/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/theme/css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="main-body">
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
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
          while ($rows = mysqli_fetch_array($result1)) {
          ?>
                  <div class="mt-3">
                    <h4><?php echo $rows['first_name']." ".$rows['last_name'] ; ?></h4>
                    <p class="text-secondary mb-1">Parent</p>
                    <p class="text-muted font-size-sm">
                    <?php echo $rows['Location']; ?>
                    </p>
                  </div>
                  <?php }
          ?>
                </div>
              </div>
            </div>
          </div>
          <?php // LOOP TILL END OF DATA
          while ($rows = mysqli_fetch_array($result)) {
          ?>

          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary"><?php echo $rows['first_name']; ?></div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary"><?php echo $rows['email']; ?></div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary"><?php echo $rows['phone']; ?></div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <?php echo $rows['Location']; ?>
                  </div>
                </div>


                <hr />

              </div>
            </div>
          </div>
        </div>
      </div>

      <hr/>

      <div class="pt-5 pb-3">
          <a class="btn btn-primary" href="mykids.php">View My Kids</a>

      </div>

      <form action="parent_controls1.php" method ="POST" >
                        <h4 class="text-dark">ADD NEW CHILD HERE </h4>


                        <input type="hidden" name ="userid" value ="<?php echo  $rows['user_id'];?>">
                        <?php } ;?>
                        <label class="text-dark" >FIRST NAME</label>
                        <input type="text" name ="fname" class ="form-control" placeholder="Enter first name ">

                        <label class="text-dark" >SECOND NAME</label>
                        <input type="text" name ="sname" class ="form-control" placeholder="Enter second name ">

                        <div class= "form-group">
                        <label class="text-dark" >KID AGE</label>
                        <input type="text" name ="kage"
                        class ="form-control" placeholder="Enter Age ">
                        </div>

                        <div class= "form-group">

                            <button type="submit" name ="save" class ="btn btn-primary">save</button>

                        </div>
                    </form>
                 </div>
              </div>
            </div>
          </div>
          </div>
    </div>


  </body>
</html>

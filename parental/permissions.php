<?php
include 'parentalcontroltest.php';
$kid_id = $_GET['id'];

$mysqli =connect_func();


// SQL query to select data from database
$sql4 = "SELECT * FROM kids where kid_id = '$kid_id' ";
$result4 = $mysqli->query($sql4);
$result = $mysqli->query($sql4);
$sql5 = "SELECT * FROM controls where kid_id = '$kid_id' ";
$result5 = $mysqli->query($sql5);

$mysqli->close();

if(isset($_POST['update'])){

  $childid=$_POST['kid'];
  $firname=$_POST['fname'];
  $secname=$_POST['sname'];
  $age=$_POST['kage'];
  $game=$_POST['games'];
  $puzzle=$_POST['puzzles'];
  $other=$_POST['other'];

  updatepermissions_func( $childid,$firname,$secname,$age,$game,$puzzle,$other);
  header('mykids.php?status=updatesuccess');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
</head>
<body>
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
          while ($rows = mysqli_fetch_array($result)) {
          
          ?>
                  <div class="mt-3">
                    <h4><?php echo $rows['first_name']." ".$rows['last_name'] ; ?></h4>
                    <p class="text-secondary mb-1">Child</p>
                    <p class="text-muted font-size-sm">
                    <?php echo "AGE:".$rows['kid_age']; ?>
                    </p>
                  </div>
          
          </hr>
          <?php };?>
                      <?php while ($rows5 = mysqli_fetch_array($result5)) {
          ?>
                    <ul>
                <?php if ($rows5['games']== 1){?>
                      <li>  Games</li> <?php }?>
                      <?php if ($rows5['puzzles']== 1){?>
                      <li>  Puzzles</li> <?php }?>
                      <?php if ($rows5['other']== 1){?>
                      <li>  Other</li> <?php }?>
          </ul>
         
          <?php };?>
          <div class="pt-5 pb-3">
          <a class="btn btn-primary" href="parent_controls1.php">Go Back</a>
          </div>
            </div>
          </div>
            </div>
          </div>

                  <div class="col-md-8">
                    <form class="form-horizontal" action="permissions.php" method ="POST" >
                      <h4 class="text-dark">UPDATE KID DETAILS</h4>   
                      <div class= "form-group">
                      <?php while ($rows4 = mysqli_fetch_array($result4)) {
          ?>
                     <input type="hidden" name =kid class ="form-control" value ="<?php echo $rows4['kid_id'];?>">
                      <label class="text-dark" >First Name</label>
                      <input type="text" name =fname class ="form-control" value ="<?php echo $rows4['first_name'];?>">
                      </div>
                  
                      <div class= "form-group">
                      <label class="text-dark" >Second Name</label>
                      <input type="text" name ="sname" class ="form-control" value ="<?php echo $rows4['last_name']?>">
                      </div>

                      <div class= "form-group">
                      <label class="text-dark" >Age </label>
                      <input type="text" name ="kage" class ="form-control" value ="<?php echo $rows4['kid_age'];?>">
                      </div>
                      
                      <div class="form-check">
                        What can my child view?
    <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="games" value="games"  >Games
    </label>
  </div>
  <div class="form-check">
    <label class="form-check-label" for="check2">
      <input type="checkbox" class="form-check-input" id="check2" name="puzzles" value= "puzzles" >Puzzles
    </label>
  </div>
  <div class="form-check">
    <label class="form-check-label" for="check3">
      <input type="checkbox" class="form-check-input" id="check3" name="other" value="other">Other
    </label>
  </div>
  <?php };?>
  
                      <div class= "form-group">
                    
                          <button type="submit" name ="update" class ="btn btn-info">update</button>
                    
                      </div>
                  </form>
                  </div>
               
        </div>
      </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </body>
</html>

</body>
</html>
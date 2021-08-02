<?php

session_start();
include 'parentalcontroltest.php';
$mysqli =connect_func();

// SQL query to select data from database
$sql = "SELECT * FROM user where user_id = 2";
$result1 = $mysqli->query($sql);

$sql2 = "SELECT * FROM kids where parent_id = 2";
$result3 = $mysqli->query($sql2);
$mysqli->close();

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
           <div class="pt-5 pb-3">
          <a class="btn btn-primary" href="parent_controls1.php">Go Back</a>
      </div> 
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
          
      </div>


          </div>
         
         
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                
              <table class="table">
        <thead>
          <tr>
            
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Activities</th>
          </tr>
        </thead>
        <?php // LOOP TILL END OF DATA
          while ($rows3 = mysqli_fetch_array($result3)) {
          ?>
        <tbody>
          <tr>
           
            <td><?php  echo $rows3['first_name'];?></td>
            <td><?php  echo $rows3['last_name'];?></td>
            <td>
                
                <a href="permissions.php?id=<?php  echo $rows3['kid_id'];?> " class="btn btn-primary btn-sm">Edit Permissions </a>
                <?php };?>
            </td>
          </tr>
        </tbody>
      </table>


              </div>
            </div>
          </div>
        </div>
      </div>

      <hr/>

    

                </div>
              </div>
            </div>
          </div>
    </div>
  </body>
</html>

</body>
</html>

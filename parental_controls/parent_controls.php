<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'gfg';

// Server is localhost with
// port number 3308
$servername = 'localhost:3308';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM userdata ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parental Controls</title>

    <link rel="stylesheet" href="parent_controls.css">
    <link rel="stylesheet" href="../assets/css/node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <!-- Theme -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/theme/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/theme/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/theme/css/style.css">
</head>

<body>
    <div class="container">
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>John Doe</h4>
                                    <p class="text-secondary mb-1">Test Parent</p>
                                    <p class="text-muted font-size-sm">Madaraka, Nairobi, Kenya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php // LOOP TILL END OF DATA
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <table>
                                <div class="card-body">
                                    <div class="row">
                                        <th>
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $rows['username']; ?>
                                            </div>
                                        </td>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <th>
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $rows['email']; ?>
                                            </div>
                                        </td>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <th>
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone</h6>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-9 text-secondary">
                                            <?php echo $rows['phone']; ?>
                                            </div>
                                        </td>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <th>
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-sm-9 text-secondary">
                                                <?php echo $rows['location']; ?>
                                            </div>
                                        </td>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </table>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</body>

</html>

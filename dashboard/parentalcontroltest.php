<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//coonecting to the database

function connect_func()
{
	$dbserver="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="kids_forum";
	$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

	if ($conn->connect_error) {
		die("Connection Failed: ". $conn->connect_error);
	}
	return $conn;
}


//Enrol Kid function


function enrol_kid_func($parent_id,$first_name,$last_name,$kid_age){
    //error handlers


        //Connect to database and post data
       $conn=connect_func();
        //Query to insert into kidstbl
    		$sql1="INSERT INTO kids (parent_id,first_name,last_name,kid_age) VALUES ('$parent_id','$first_name','$last_name','$kid_age')";
       	if($conn ->query($sql1)){
				 return 'success';
			 } else {
			 	echo "false";
			 }
  }
//contol permission/access to content
function updatepermissions_func( $childid,$firname,$secname,$age,$game,$puzzle,$other)
 {
	 			$conn = connect_func();
	 			$sql2="SELECT * FROM controls WHERE kid_id = '$childid' ";
	 			$result2= $conn->query($sql2);
				if(mysqli_num_rows($result2)>0){
				}else {
					$sql3="insert INTO controls (kid_id,content_id) VALUES ('$childid','1') ";
					$conn->query($sql3);
				}




        if($conn->query("UPDATE kids SET first_name = '$firname', last_name = '$secname', kid_age= $age WHERE kid_id = $childid")){

					if($game == 'games'){
		 			$conn->query("UPDATE controls SET Games = '1' WHERE kid_id = '$childid'");
						 }else{
								 $conn->query("UPDATE controls SET games = '0' WHERE kid_id = '$childid'");
						 }
						 if($puzzle =='puzzles'){
								 $conn->query("UPDATE controls SET puzzles = '1' WHERE kid_id = '$childid'");
										 }else{
												 $conn->query("UPDATE controls SET puzzles = '0' WHERE kid_id = '$childid'");
										 }
										 if($other =='other'){
												 $conn->query("UPDATE controls SET other = '1' WHERE kid_id = '$childid'");
														 }else{
																 $conn->query("UPDATE controls SET other = '0' WHERE kid_id = '$childid'");
														 }
				 return 'success';
			 } else {
			 	echo "failed";
			 }

    }
		function deleteKid($id)
		{
			$conn = connect_func();
			if($conn->query("delete from controls where kid_id = '$id'")){
				if($conn->query("delete from  kids where kid_id = '$id'")){
					return "success";
				} else {
					echo "failed";
				}
			}
		}









?>

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
       $conn ->query($sql1);
      
	
    
        //Get id for the child who has been enrolled
        $sql2="SELECT * FROM kids WHERE first_name = '$first_name' AND parent_id = '$parent_id' ";
        
        if( $conn->query($sql2)){
            $result2= $conn->query($sql2);
        
    
        $rows = mysqli_fetch_array($result2);
        $kid_id = $rows['kid_id']; // fetch the data  
        
        //insert the kid id and parent id + default status and progress into conrols table
        $sql3="INSERT INTO controls (kid_id,content_id) VALUES ('$kid_id','1') ";
      
        if(! $conn->query($sql3))
       {
        $error = $conn->errno . ' ' . $conn->error;
    echo $error; 
       }else{
               
		header("Location:parent_controls1.php?enrollment=success");
		
	    }
    }
}
//contol permission/access to content 
function updatepermissions_func( $childid,$firname,$secname,$age,$game,$puzzle,$other)
 {
    
       $conn = connect_func();
        if($conn->query("UPDATE kids SET first_name = '$firname', last_name = '$secname', kid_age= $age WHERE kid_id = $childid")){
        
echo 'passed';
        }
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
        header("Location:mykids.php?enrollment=success");
    }


		
	





?>


           

         
	
	


	
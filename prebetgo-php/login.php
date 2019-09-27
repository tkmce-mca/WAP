<?php



$username=$_POST['username'];

$password=$_POST['password'];

 

// include connect class

//include'connect.php';

 $conn = mysqli_connect("localhost", "root", "","db_connect") or die(mysql_error());

// connecting to db

//$db = new DB_CONNECT();



//using LIKE

$result = mysqli_query($conn,"SELECT * FROM sd_users WHERE email='$username' AND password='$password'") 

or die(mysqli_error($conn));

 

// check for empty result

if (mysqli_num_rows($result) > 0) {

    // match found

	//send success

		echo "success";

		$response["success"] = 1;

	}//end match found

	else{//no match found

		//send status fail

		echo "fail";

		$response["success"] = 0;

	}

	echo json_encode($response);



?>
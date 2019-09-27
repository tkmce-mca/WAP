<?php
// include connect class

require_once __DIR__ . '/connect.php';

// connecting to db

$db = new DB_CONNECT();

$id=$_POST['id'];
$trainingname=$_POST['trainingname'];
$website=$_POST['website'];
$contact=$_POST['contact'];
$trainingdesc=$_POST['trainingdesc'];


$q = mysql_query("INSERT INTO a_training VALUES ('$id','$trainingname', '$website','$contact','$trainingdesc')");

//echo (mysql_error());

 

// check for empty result

if ($q==true) {

    // match found

	//send success

		echo "success";

	}//end match found

	else{//no match found

		//send status fail

		echo "fail";

	}

?>
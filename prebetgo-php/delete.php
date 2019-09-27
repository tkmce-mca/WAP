<?php
// include connect class

require_once __DIR__ . '/connect.php';

// connecting to db

$db = new DB_CONNECT();

$id=$_POST['id'];

$q = mysql_query("DELETE FROM a_training 
		WHERE id='$id' ");

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
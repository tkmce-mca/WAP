<?php
//search.php
/*
 * Following code will search training based on keywords
 */
 
// array for JSON response
$response = array();
 
// include connect class
require_once __DIR__ . '/connect.php';
 
// connecting to db
$db = new DB_CONNECT();

$keyword=$_GET["keyword"];
// get idioms based on keyword

//using LIKE
$result = mysql_query("SELECT * FROM a_training WHERE trainingname LIKE '%$keyword%' LIMIT 0, 20") 
or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    $response["traininglist"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $traininglist= array();
        $traininglist["id"] = $row["id"];
        $traininglist["trainingname"] = $row["trainingname"];
        $traininglist["website"] = $row["website"];
		$traininglist["contact"] = $row["contact"];
		$traininglist["trainingdesc"] = $row["trainingdesc"];
 
        // push single idiom array into final response array
        array_push($response["traininglist"], $traininglist);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No training found";
 
    // echo no users JSON
    echo json_encode($response);
}
?>
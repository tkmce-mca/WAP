<?php
$con=mysql_connect("localhost","root","");
$db = mysql_select_db("psmzatraining");
//
$sql="select * from a_training
		where trainingname like '%android%'";
$rs=mysql_query($sql);//execute sql

if(mysql_num_rows($rs)>0){
	$response["traininglist"] = array();
 
    while ($row = mysql_fetch_array($rs)) {
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
	echo json_encode($response);
}

?>
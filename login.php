<?php
require "conn.php";
$user_name =$_POST["user_name"];
$user_pass =$_POST["pass_word"];
$mysql_qry = "select * from adminlogin where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result) >0)
{
	echo "login successfull";
	
}
else
{
	echo "login not successfull";
}
?>

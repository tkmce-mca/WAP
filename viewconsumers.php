<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<center>
<?php
include 'admses.php';
include 'conn.php';
$sql=mysqli_query($conn,"select r_id,r_no from route_details");

?>


<?php include 'aheader.php'?>
 <style type="text/css">
table.pad td{
padding:8px;
font-size:18px;
color:#fff;

}

</style>
<font color="white">
<h1>Select Route Id</h1>
<br /><br />
<u><h3>Available Route Numbers</h3></u></font>
<table class="pad">
<?php
$i=1;
while($r=mysqli_fetch_array($sql))
{
	?><tr>
	<td><?php //echo $i.".  ";?></td>
	<td><?php
	$i+=1;
	?><b><a href="viewconsumerscheck.php?rno=<?php echo $r[1];?>"><?php echo $r[1]."<br><br>";?></a></b></td></tr><?php
	
}
?>
</table>


</center>
</body>
</html>
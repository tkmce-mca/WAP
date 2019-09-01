<?php
include 'conn.php';
session_start();
$sn=$_GET['sn'];
$sql=mysqli_query($conn,"delete from demo where sl_no=$sn");
if($sql)
	echo "<script>window.location.href='show.php'
	alert('Deleted Successfully!!!')
	</script>";
else
	echo "<script>window.location.href='show.php'
	alert('Failed to delete!!!')
	</script>";

?>
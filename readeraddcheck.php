<?php
include 'bg.php';
include 'admses.php';
include 'conn.php';
$rno=$_POST['rno'];
$name=$_POST['rname'];
$mob=$_POST['mob'];

$sql=mysqli_query($conn,"select * from reader_details where r_no='$rno'");
if($sql)
{
	echo "<script>window.location.href='adminhome.php'
			alert('Reader added successfully!!!')
			</script>";
}
else
{
	echo "<script>window.location.href='adminhome.php'
			alert('Some error occured!!!')
			</script>";
}
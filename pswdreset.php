<?php
include 'bg.php';
include 'admses.php';
include 'conn.php';
$pswd=$_POST['pswd'];
$rno=$_POST['rno'];
$s=mysqli_query($conn,"select * from reader_login where r_no='$rno'");
$n=mysqli_num_rows($s);
if($n==0)
{
	$sql=mysqli_query($conn,"insert into reader_login(r_no,password) values('$rno','$pswd')");
}	
else
{
	$sql=mysqli_query($conn,"update reader_login set password='$pswd' where r_no='$rno'");
}	
	

if($sql)
{
	echo "<script>window.location.href='viewreaders.php'
			alert('Password has been reset successfully!!!')
			</script>";
}
else
{
	echo "<script>window.location.href='viewreaders.php'
			alert('Some error has occured!!!')
			</script>";
}
?>
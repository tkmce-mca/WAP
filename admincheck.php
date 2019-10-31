<?php
include 'conn.php';
include 'bg.php';
$user=$_POST['username'];
$pswd=$_POST['password'];
$sql=mysqli_query($conn,"select * from adminlogin where username='$user' and password='$pswd'");

$r=mysqli_num_rows($sql);
if($r==0)
{
	echo"<script>window.location.href='index.php'
	alert('Invalid username or password!!!')
	</script>";
}
else
{
	session_start();
	$row=mysqli_fetch_array($sql);
	$_SESSION['aid']=$row[0];
	echo"<script>window.location.href='adminhome.php'
	</script>";
}

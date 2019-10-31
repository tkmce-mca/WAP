<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Readers</title>
<?php
include 'admses.php';

include 'conn.php';
$rno=$_POST['rno'];
$sql=mysqli_query($conn,"select * from reader_details where r_no='$rno'");
$n=mysqli_num_rows($sql);
if($n==0)
{
	echo "<script>window.location.href='viewreaders.php'
			alert('No readers are available in this route!!!')
			</script>";
}
if($n>0)
{
	$p=mysqli_query($conn,"select password from reader_login where r_no='$rno'");
	$ps=mysqli_fetch_array($p);
}
?>

</head>
<body>

<center>
<form method="post" action="pswdreset.php">
<h1>Reader of route<?php echo $rno;?></h1>
<?php 
include 'aheader.php'?>
<style type="text/css">
table.pad td{
padding:20px;
color:#fff;

}
</style>
<br /><br />
<h3>
<table class="pad">
<?php $r=mysqli_fetch_array($sql); ?>
<tr><td><b>Name:</b></td><td> <?php echo $r[1];;?></td></tr>

<tr><td><b>Phone:</b></td><td> <?php echo $r[2];?></td></tr>
</table>
</h3>
<br><br>
<font color="yellow">
<h2>Password is<h2></font>
<h1><font color="red"><?php echo $ps[0];?></font></h1>
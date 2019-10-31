<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php

include 'admses.php';
include 'conn.php';
$rno=$_GET['rno'];
$sql=mysqli_query($conn,"select * from reader_details");


?>
</head>

<body>

<center>
<h4>
<form method="post" action="pswdreset.php">

<?php include 'aheader.php'?>
<font color="red"><b>
<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          
            <div class="panel-heading">
<h1>Reset Password for Route <?php echo $rno;?></h1></b></font>

<font color="white"><br /><br /><br>
Enter the new password for <?php echo $rno;?></font>
<br>
<input type="text" class="form-control" name="pswd" required>
<input type="hidden" name="rno" value="<?php echo $rno;?>">
<br><br>
<input type="submit" class="btn btn-info" value="Reset">
</form>
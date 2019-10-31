<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php

include 'admses.php';
include 'conn.php';
$rno=$_POST['rno'];
$sql=mysqli_query($conn,"select * from reader_details where r_no='$rno'");
$n=mysqli_num_rows($sql);
if($n!=0)
{
	echo "<script>window.location.href='adminhome.php'
			alert('Reader is already available for this route!!!')
			</script>";
	
}
?>
</head>

<body>
<center>
<h1>Add a Reader</h1>
<?php include 'aheader.php'?>
<br>
<form method="post" action="readeraddcheck.php">
<br>
<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          
            <div class="panel-heading">
<input type="hidden" name="rno">
<input type="text" name="rname" class="form-control" placeholder="Name" required>
<br><br>
<input type="number" name="mob" class="form-control" placeholder="Mobile" required>
<br><br>
<input type="submit" class="btn btn-danger" value="Add">
</form>
</center>
</body>
</html>
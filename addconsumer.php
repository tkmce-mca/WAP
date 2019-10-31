<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

 <style type="text/css">
table.pad th{
padding:20px;
text-align:center;
color:#fff;
}
table.pad td{
padding:20px;
text-align:center;
color:#000;
}
</style>
</head>

<body>



<center>
<?php include 'aheader.php'?>


<form method="post" action="addconsumercheck.php" >

<br />
<table class="pad" cellpadding="4">
<tr>
<th>Route No:</th><td><input type="text" class="form-control" name="rno" /></td></tr>
<th>Consumer No:</th><td><input type="text" class="form-control" name="cno" /></td></tr>
<tr>
<th>Consumer Name:</td><th><input type="text" class="form-control" name="cname" /></td></tr>
<tr><th>Resi. Ass. No:</th><td><textarea name="res" class="form-control"></textarea></td></tr>
<tr><th>Mobile:</th><td><input type="number" class="form-control" name="mob" /></td></tr>

		

<tr><td></td><td><input type="submit" class="btn btn-danger" value="Add Consumer to Database"/></td></tr>
</table>
</form>


</center>
</body>
</html>
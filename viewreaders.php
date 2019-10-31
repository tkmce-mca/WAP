<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Readers</title>
<?php
include 'admses.php';
include 'conn.php';
$sql=mysqli_query($conn,"select * from reader_details");
$n=mysqli_num_rows($sql);
if($n==0)
{
	echo "<script>window.location.href='viewconsumers.php'
			alert('No readers are available!!!')
			</script>";
}

?>
<style type="text/css">
table.pad td{
padding:20px;
text-align:center;

}
table.pad th{
	font-size:25px;
padding:20px;
text-align:center;

}
</style>
</head>

<body>
 
<center>


<?php include 'aheader.php'?>
<br>
<h4>
<form method="post" action="readerbyroute.php">
<font color="white">
<div class="form-group"><div class="input-group input-group-lg">
Search reader by route number&nbsp;</font><input type="text" name="rno"  placeholder="Route number" required>&nbsp;&nbsp;<input type="submit" class="btn btn-info" value="Search">
</div>
</div>
</form>
<br /><br />
<font color="white">
	<table class="pad">
	<tr><th>Name</th><th>Route No</th><th>Mobile</th></tr>
	<?php
	while($r=mysqli_fetch_array($sql))
	{
		
		?>
		
		<td><?php echo $r[1];?></td><td><?php echo $r[3];?></td><td><?php echo $r[2];?></td><td><a href="routepswd.php?rno=<?php echo $r[3];?>">Click to reset Password</a></td></tr>		
	
		<?php
		
	}

	?>
	</table>
	
	
	
	
	



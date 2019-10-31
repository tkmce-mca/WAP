<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include 'admses.php';
include 'conn.php';
$rno=$_GET['rno'];
$s=mysqli_query($conn,"select * from consumer_details where r_no='$rno'");
$c=mysqli_num_rows($s);
if($c==0)
{
	echo "<script>window.location.href='viewconsumers.php'
			alert('No consumers in this route')
			</script>";
}

?>
</head>

<body>
<font color="white">
<?php include 'aheader.php'?>
<style type="text/css">
table.pad th{
padding:20px;
font-size:20px;
color:#fff;
text-align:center;

}
table.pad td{
padding:20px;
color:#fff;
font-size:18px;
text-align:center;
}
h1{color:orange;}
</style>
<center>
<h1>Consumers in route <?php echo $rno;?></h1><br /><br />
<table class="pad" >
<tr><th>Consumer No</th><th>Name</th><th>Res</th><th>Phone</th></tr>
<?php
while($r=mysqli_fetch_array($s))
{
	echo "<tr>"."<td>$r[1]</td>"."<td>$r[2]</td>"."<td>$r[3]</td>"."<td>$r[4]</td></tr>";	
	
	
}
?>
</center>
</body>
</html>
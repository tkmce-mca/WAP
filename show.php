<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:5;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  th,td
  {
	  padding:7px;
  }
  
  </style>
  <?php
session_start();
include 'conn.php';
$sql=mysqli_query($conn,"select * from demo");
$n=mysqli_num_rows($sql);
if ($n==0)
	echo "<script>window.location.href='adminhome.php'
	alert('no data available!!!')
	</script>";
?>
</head>

<body>

<center>
<?php

if($n!=0)
{
	?>
    
    <a href="adminhome.php"><input type="button" value="Home" /></a>
<a href="import.php"><input type="button" value="Import from Excel" /></a>
<a href="show.php"><input type="button" value="Show all data" /></a>
<a href="adminlogout.php"><input type="button" value="Logout" /></a>
<br />
    <h1>Database Information</h1>
    <table>
    <tr>
    <th>Sl_No</th>
    <th>Consumer No</th>
    <th>Res. Assn. No</th>
    <th>Meter No.</th>
    <th>Reading</th>
    <th>Amount</th>
    <th>Remarks</th>
    <th>Phone</th>
    <th>Latitude</th>
    <th>Longitude</th>
    </tr>
    
    <?php
	while($r=mysqli_fetch_array($sql))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td>";
		
		?>
		<td><a href="deletedata.php?sn=<?php echo $r[0];?>">Delete</i></a></td>
        <?php
	}
	echo "</tr></table>";
}

?>
</table>
</center>
</body>
</html>
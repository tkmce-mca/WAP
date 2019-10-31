<?php
include 'conn.php';
include 'bg.php';
$rno=$_POST['rno'];
$cno=$_POST['cno'];
$cname=$_POST['cname'];
$res=$_POST['res'];
$mob=$_POST['mob'];

$sql=mysqli_query($conn,"insert into consumer_details (c_no,c_name,res_ass_no,phone,r_no) values('$cno','$cname','$res',$mob,'$rno')");
if($sql)
{
	echo "<script>window.location.href='addconsumer.php'
		alert('Inserted successfully!!!')
		</script>";
}
else
{
	echo "<script>window.location.href='addconsumer.php'
		alert('Error in insertion!!!')
		</script>";
}

?>
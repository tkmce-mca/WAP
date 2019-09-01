<?php
include 'conn.php';
session_start();
session_destroy();
if(!isset($_SESSION['aid']))
	echo "<script>window.location.href='index.php'
	alert('Logged Out Successfully!!!')
	</script>";


?>
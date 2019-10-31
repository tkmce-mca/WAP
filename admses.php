<?php
session_start();

if(!isset($_SESSION['aid']))
{
	echo"<script>window.location.href='index.php'
	alert('Please login to continue!!!')
	</script>";
	
}
?>
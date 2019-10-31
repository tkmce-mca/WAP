<?php
include 'bg.php';
include 'admses.php';

session_destroy();
echo"<script>window.location.href='index.php'
	alert('Logged out successfully!!!')
	</script>";
	?>
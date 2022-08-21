<?php 
	setcookie('status', 'true', time()-1000, '/');
	header('location: ../view/loginadmin.php');
?>
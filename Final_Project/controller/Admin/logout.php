<?php 

	session_start();

	setcookie('flag', 'abc', time()-10, '/');
	header('location: ../../views/Admin/login.html');
?>

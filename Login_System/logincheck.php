<?php

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != ""){
			if($password != ""){
				
				if($username == $password){
					header('location:Home page.html');
				}else{
					echo "invalid username/password";
				}
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>
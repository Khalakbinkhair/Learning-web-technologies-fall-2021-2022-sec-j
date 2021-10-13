<?php
    session_start();
 
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != ""){
			if($password != ""){
			 
			 if($_COOKIE['username'] == $username && $_COOKIE['password'] == $password){
					//$_SESSION['flag'] = "true";
				  setcookie('username',$_POST['username'], time()+3600, '/');
				  setcookie('password',$_POST['password'],time ()+3600, '/');
					header('location: Loggedin.html');
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
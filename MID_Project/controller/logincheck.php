<?php
    session_start();
 
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != ""){
			if($password != ""){
			 
			if($_COOKIE['username'] == $username && $_COOKIE['password'] == $password){
				//	$_SESSION['flag'] = "true";
				   setcookie('flag', 'true', time()+3600,'/');
                     
					header('location: ../view/Home.php');
				}else{
					echo "invalid username";
				}
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Null Submission ";
		}
	}
?>
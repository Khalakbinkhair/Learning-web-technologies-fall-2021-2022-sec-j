<?php
     session_start();

	if(isset($_POST['submit'])){

		if($_POST['username'] !=""){
				if($_POST['email'] !=""){
					if($_POST['gender'] !=""){
						if($_POST['date'] !=""){
							if($_POST['checkbox'] !=""){
								if($_POST['text'] !=""){
									if($_POST['file'] !=""){
									  if($_POST['BloodGroup'] !=""){
									  	if($_POST['password'] != ""){
                     $user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					$_SESSION['user'] = $user;
					header('location: Loginform.html');
				}else{
					echo "Invalid BloodGroup...";
				}	
			}else{
				echo "Invalid file..";
			}
		}else{
			echo "Invalid text...";
		}
		}else{
			echo "Invalid checkbox...";
		}
		}else{
			echo "Invalid date...";
		}
		}else{
			echo "Invalid gender...";
		}
		}else{
			echo "Invalid email...";
		}
		}else{
			echo "Invalid username...";
		}}else{
			echo "Invalid Password...";
		}
	}
?>
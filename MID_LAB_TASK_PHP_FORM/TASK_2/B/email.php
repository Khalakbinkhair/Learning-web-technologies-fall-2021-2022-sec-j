<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['Email'];
		if($email == ""){
			echo "Null Value";
		}else{
			echo $email;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Email</legend>
			
					
						<input type="email" name="Email" value=""><br/>
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>
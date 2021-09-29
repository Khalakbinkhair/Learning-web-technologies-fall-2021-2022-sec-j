<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "Done!!!";
		}else{
			echo $gender;
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
			<legend>GENDER</legend>
			
					
						<input type="radio" name="gender" value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "Done!!!";
		}else{
			echo $gender;
		}	
	}
	
?>
">Male
                        <input type="radio" name="gender" value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "Done!!!";
		}else{
			echo $gender;
		}	
	}
	
?>
">Female
                        <input type="radio" name="gender" value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "Done!!!";
		}else{
			echo $gender;
		}	
	}
	
?>
">Other<br/>
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>
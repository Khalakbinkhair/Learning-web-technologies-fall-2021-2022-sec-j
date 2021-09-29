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
	<form method="get" action="gendercheck.php">
		<fieldset>
			<legend>Gender</legend>
			
					
						<input type="radio" name="gender" value="">Male
                        <input type="radio" name="gender" value="">Female
                        <input type="radio" name="gender" value="">Other<br/>
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>
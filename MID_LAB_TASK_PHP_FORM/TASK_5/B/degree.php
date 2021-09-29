<?php 

	if(isset($_REQUEST['submit']))
	{
		$check = $_REQUEST['check'];
		if($check == ""){
			echo "Done!!!!";
		}else{
			echo $check;
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
	<form method="get" action="degreecheck.php">
		<fieldset>
			<legend>degree</legend>
			
					      <input type="checkbox" name="check" value="">SSC
                          <input type="checkbox" name="check" value="">HSC
                          <input type="checkbox" name="check" value="">BSc
                          <input type="checkbox" name="check" value="">MSc<br/>
						
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>
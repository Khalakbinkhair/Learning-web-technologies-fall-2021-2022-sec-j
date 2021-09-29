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
	<form method="get" action="#">
		<fieldset>
			<legend>DEGREE</legend>
			
					      <input type="checkbox" name="check" value="<?php 

	if(isset($_REQUEST['submit']))
	{
		$check = $_REQUEST['check'];
		if($check == ""){
			echo "Done!!!!";
		}else{
			echo $check;
		}	
	}
	
?>">SSC
                          <input type="checkbox" name="check" value="<?php 

	if(isset($_REQUEST['submit']))
	{
		$check = $_REQUEST['check'];
		if($check == ""){
			echo "Done!!!!";
		}else{
			echo $check;
		}	
	}
	
?>">HSC
                          <input type="checkbox" name="check" value="<?php 

	if(isset($_REQUEST['submit']))
	{
		$check = $_REQUEST['check'];
		if($check == ""){
			echo "Done!!!!";
		}else{
			echo $check;
		}	
	}
	
?>">BSc
                          <input type="checkbox" name="check" value="<?php 

	if(isset($_REQUEST['submit']))
	{
		$check = $_REQUEST['check'];
		if($check == ""){
			echo "Done!!!!";
		}else{
			echo $check;
		}	
	}
	
?>">MSc<br/>
						
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>
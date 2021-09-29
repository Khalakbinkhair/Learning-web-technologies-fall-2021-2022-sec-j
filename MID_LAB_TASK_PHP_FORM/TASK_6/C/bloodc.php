<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
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
	<form method="get" action="bloodcheck.php">
		<fieldset>
			<legend><b>BLOOD GROUP<b/></legend>
			 <select name=" ">
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">A+</option>
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">AB-</option>
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">AB+</option>
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">B+</option>
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">o+</option>
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">O-</option>
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">A-</option>
                <option value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST["blood"];
		if($blood == ""){
			echo "Done!!";
		}else{
			echo $blood;
		}	
	}
	
?>">B-</option>
               </select>  <br/>
					      
						
					
				<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>


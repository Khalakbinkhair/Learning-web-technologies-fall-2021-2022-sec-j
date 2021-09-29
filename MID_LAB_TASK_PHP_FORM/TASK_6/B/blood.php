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
			<legend><b>Blood Group<b/></legend>
			 <select name=" ">
                <option value="">A+</option>
                <option value="">AB-</option>
                <option value="">AB+</option>
                <option value="">B+</option>
                <option value="">o+</option>
                <option value="">O-</option>
                <option value="">A-</option>
                <option value="">B-</option>
               </select>  <br/>
					      
						
					
				<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>


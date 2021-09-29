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

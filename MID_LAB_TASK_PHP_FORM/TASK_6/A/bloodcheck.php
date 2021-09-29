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


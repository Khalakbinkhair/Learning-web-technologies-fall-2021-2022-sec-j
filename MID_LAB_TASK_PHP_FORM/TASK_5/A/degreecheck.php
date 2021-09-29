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
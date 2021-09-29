<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name == ""){
			echo "Null Value";
		}else{
			echo $name;
		}	
	}else{
		echo "invalid request...";
	}
	
?>
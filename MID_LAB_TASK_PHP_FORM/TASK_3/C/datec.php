<?php 

    
    
    if(isset($_REQUEST['submit']))
    {
        $date = $_REQUEST['date'];
        if($date == ""){
            echo "Null Value";
        }else{
            echo $date;
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
	<form method="get" action="datecheck.php">
		<fieldset>
			<legend><b>DATE<b/></legend>
			
					
						<input type="date" name="date" value="<?php 

    
    
    if(isset($_REQUEST['submit']))
    {
        $date = $_REQUEST['date'];
        if($date == ""){
            echo "Null Value";
        }else{
            echo $date;
        }   
    }
    
?>"><br/>
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>
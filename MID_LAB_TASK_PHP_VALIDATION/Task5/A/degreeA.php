

<html>
<head>
	<meta charset="utf-8">
	<title>Degree </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>degree</legend>
			<input type="checkbox" name="check[]" value="SSC"> SSC
            <input type="checkbox" name="check[]" value="HSC"> HSC
            <input type="checkbox" name="check[]" value="BSc"> BSc
            <input type="checkbox" name="check[]" value="MSc"> MSc
		   	 
           
    <br>
    <hr>
    <input type="submit" name="submit" value="Submit">

    <?php

if(isset($_REQUEST['submit']))
{
    $degree =$_REQUEST['check'];
     if($degree=="")
       {
           echo " " ;
       }
       else
       	 {
       	 	$n=count($degree);
       	 	for ($i=0; $i <$n ; $i++) { 
       	 		if ($n<2)
       	 		echo "At least 2 must be Select";
       	 	
       	 	else
       	 		echo $degree. "Success..";
       	 	}
}
}       	 
?>
</fieldset>
</form>
</body>
</html>
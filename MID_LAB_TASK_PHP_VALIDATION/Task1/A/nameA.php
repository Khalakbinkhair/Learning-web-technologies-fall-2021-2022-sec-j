<html>
<head>
    <meta charset="utf-8">
    <title>Name Field </title>
</head>
<body>  
    <form method="gets" action="#" >
        <fieldset border-width: 3px>
            <legend>NAME</legend>
            
                        <input type="text" name="myname" value="<?php 

    //print_r($_GET);
    
    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['myname'];
        if($name == ""){
            echo "null value...";
        }else{
            echo $name;
        }   
    }
    
?>
"><br/>
                    
                        <input type="submit" name="submit" value="Submit">
                    
        </fieldset>
    </form>
</body>
</html>
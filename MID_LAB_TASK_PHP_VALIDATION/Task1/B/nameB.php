<html>
<head>
    <meta charset="utf-8">
    <title>Name Field </title>
</head>
<body>  
    <form method="POST" action="#" >
        <fieldset border-width: 3px>
            <legend>NAME</legend>
            
                        <input type="text" name="myname" value="<?php 

    
    if(isset($_REQUEST['submit']))
    {
        $str = $_REQUEST['myname'];
       if (strlen($_POST["myname"])<2)
            {
              echo " $str-should be 2 or longer";
            }
       
       
    }
    
?>
"><br/>
                    
                        <input type="submit" name="submit" value="Submit">
                    
        </fieldset>
    </form>
</body>
</html>
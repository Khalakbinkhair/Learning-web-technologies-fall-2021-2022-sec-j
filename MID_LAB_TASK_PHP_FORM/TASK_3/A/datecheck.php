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
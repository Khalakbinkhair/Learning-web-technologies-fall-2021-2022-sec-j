<?php
    
    require_once('db.php');

    function addProducts($product)
    {
        $con=getConnection();

        $sql="insert into products values('','{$product['username']}','{$product['buy']}','{$product['sell']}')" ;

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }



?>
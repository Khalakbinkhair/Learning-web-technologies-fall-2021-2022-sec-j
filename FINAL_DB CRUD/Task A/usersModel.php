<?php
    
    require_once('db.php');

    function addProducts($product)
    {
        $con=getConnection();

        $sql="insert into products values('','{$product['name']}','{$product['buying']}','{$product['selling']}')" ;

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }

    function getAllProduct()
    {
        $con=getConnection();

            $sql ="select * from products ";
            $result=mysqli_query($con, $sql);

            return $result;
                
    }



?>
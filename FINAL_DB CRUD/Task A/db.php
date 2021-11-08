<?php

    $host="localhost";
    $dbname="webtech";
    $dbuser="root";
    $dbpassword="";
    
    function getConnection()
    {
        global $host;
        global $dbuser;
        global $dbname;
        global $dbpassword;

        $con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);

        return $con;
    }

?>
<?php

    $server ="localhost";
    $username ="root";
    $password ="";
    $database = 'form_php';
    $con = mysqli_connect($server,$username,$password, $database);

    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    else
    {
        // echo"Connection Failed".mysqli_connect_error();
        return true;
    }

?>
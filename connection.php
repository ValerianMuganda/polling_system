<?php  
    $conn = new mysqli("localhost", "root", "", "pooling_db");

    if(!$conn){
        echo"Failed To Connect";
    }else{
        //echo "Connected";
    }


?>
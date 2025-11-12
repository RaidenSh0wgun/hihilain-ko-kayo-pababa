<?php

    $connection = new mysqli("127.0.0.1", "root", "", "hr");

    if($connection->connect_error){
        die("Connection failed: ".$connection->connect_error);
    }
    
    
?>
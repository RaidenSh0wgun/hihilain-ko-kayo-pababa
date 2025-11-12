<?php 
    include_once('connection/connection.php');

    if($connection){
        echo "connected";
    }else{
        echo "not connected";
    }

?>
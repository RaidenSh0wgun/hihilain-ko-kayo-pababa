<?php 
    include_once('config/connection.php');

    if($connection){
        echo "connected";
    }else{
        echo "not connected";
    }

?>
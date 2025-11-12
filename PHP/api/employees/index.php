<?php
    include_once('../config/connection.php');
    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_GET['_method'])){
       $method = $_GET['_method'];
    }

    switch ($method) {
        case 'GET':
            include_once("getEmployees.php");
            break;
        case 'POST':
            echo $method;
            break;
        case 'PUT':
            echo $method;
            break;
        case 'DELETE':
            echo $method;
            break;
        default:
            # code...
            break;
    }
    
?>
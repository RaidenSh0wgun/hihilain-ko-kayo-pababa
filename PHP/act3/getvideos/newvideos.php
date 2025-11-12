<?php
    include_once("../config/connection.php");

    $recieved = json_decode(file_get_contents("php://input"), true);

    $first_name = mysqli_real_escape_string($connection,$recieved['first_name']);
    $last_name =  mysqli_real_escape_string($connection,$recieved['last_name']);
    $email =  mysqli_real_escape_string($connection,$recieved['email']);
    $pnum = mysqli_real_escape_string($connection,$recieved['phone_number']);

    $date_uploaded = date("Y-m-d");
    $id =  mysqli_real_escape_string($connection,$recieved['id']);
    $title = mysqli_real_escape_string($connection,$recieved['title']);
    $description =  mysqli_real_escape_string($connection,$recieved['description']); 
    $url = mysqli_real_escape_string($connection,$recieved['url']);
    $thumbnail = mysqli_real_escape_string($connection,$recieved['thumbnail']);

    $newvideos = $connection->prepare("INSERT INTO videoss (first_name, last_name, email, hire_date, phone_number, job_id, title, description, url) VALUES (?,?,?,?,?,?,?,?,?)");

    $newvideos->bind_param('ssssssdii',$first_name, $last_name, $email, $hdate, $pnum, $j_id, $title, $description,$url);

    $newvideos->execute();

    echo json_encode(["status"=>true, "message"=>"videos: $first_name $last_name added!"], JSON_PRETTY_PRINT);

    $newvideos->close();
    $connection->close();


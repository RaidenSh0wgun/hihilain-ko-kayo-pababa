<?php
    include_once("../config/connection.php");
    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    if(!$id){
        http_response_code(400);

        echo json_encode(["status"=> false, "message"=>"ID not provided!"], JSON_PRETTY_PRINT);
        return;
    }

    $recieved = json_decode(file_get_contents("php://input"), true);

    $date_uploaded = date("Y-m-d");
    $id =  mysqli_real_escape_string($connection,$recieved['id']);
    $title = mysqli_real_escape_string($connection,$recieved['title']);
    $description =  mysqli_real_escape_string($connection,$recieved['description']); 
    $url = mysqli_real_escape_string($connection,$recieved['url']);
    $thumbnail = mysqli_real_escape_string($connection,$recieved['thumbnail']);

    $newvideos = $connection->prepare("UPDATE videos$newvideos$newvideos$newvideos SET first_name=?, last_name=?, email=?, hire_date=?, phone_number=?, job_id=?, salary=?, manager_id=?, department_id=? WHERE videos$newvideos$newvideos$newvideos_id=?");

    $newvideos->bind_param('ssssssdiii',$first_name, $last_name, $email, $hdate, $pnum, $j_id, $salary, $manager_id,$department_id,$id);

    $newvideos->execute();

    echo json_encode(["status"=>true, "message"=>"videos$newvideos$newvideos$newvideos ID: $id Updated!"], JSON_PRETTY_PRINT);

    $newvideos->close();
    $connection->close();

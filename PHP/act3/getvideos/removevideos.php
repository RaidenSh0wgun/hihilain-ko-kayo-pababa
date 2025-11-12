<?php
    include_once("../config/connection.php");
    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    if(!$id){
        http_response_code(400);

        echo json_encode(["status"=> false, "message"=>"ID not provided!"], JSON_PRETTY_PRINT);
        return;
    }

    $remove = $connection->prepare("DELETE FROM videos WHERE videos_id=?");

    $remove->bind_param("i",$id);

    $remove->execute();

    if($remove->affected_rows == 0){
        http_response_code(400);
        echo json_encode(["status"=>false, "message"=>"No videos was removed"],JSON_PRETTY_PRINT);
    }else{
        echo json_encode(["status"=>true, "message"=>"videos ID: $id removed!"],JSON_PRETTY_PRINT);
    }
    $remove->close();
    $connection->close();
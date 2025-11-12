<?php
    include_once("../config/connection.php");
    $video = [];
    $video_id = 0;
    if(isset($_GET['id'])){
        $video_id = $_GET['id'];
    }
    $stmt ="";
    if($video_id == 0){
        $stmt = "SELECT * FROM videos";
    }else{
        $stmt = "SELECT * FROM videos WHERE video_id = ?";
    }

    $queryAllvideos = $connection->prepare($stmt);

    if($video_id){
        $queryAllvideos->bind_param("i",$video_id);
    }
    $queryAllvideos->execute();

    $result = $queryAllvideos->get_result();

    while($fetch = $result->fetch_assoc()){
        array_push($videos, $fetch);
    }

    if(count($videos) > 0){
        http_response_code(200);
        echo json_encode(["status"=> true, "data"=>$videos], JSON_PRETTY_PRINT);
    }else{
        http_response_code(404);
        echo json_encode(["status"=> false, "message"=>"No data found"], JSON_PRETTY_PRINT);
    }

    mysqli_close($connection);
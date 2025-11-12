<?php
include_once("../connection/connection.php");

$input = json_decode(file_get_contents("php://input"), true);

if (!isset($input['name']) || !isset($input['position']) || !isset($input['salary'])) {
    http_response_code(400);
    echo json_encode([
        "status" => false,
        "message" => "Missing required fields"
    ], JSON_PRETTY_PRINT);
} else {
    $name = mysqli_real_escape_string($connection, $input['name']);
    $position = mysqli_real_escape_string($connection, $input['position']);
    $salary = floatval($input['salary']);

    $query = "INSERT INTO employees (name, position, salary) VALUES ('$name', '$position', $salary)";
    $result = mysqli_query($connection, $query);

    if ($result) {
        http_response_code(201);
        echo json_encode([
            "status" => true,
            "message" => "Employee created",
            "id" => mysqli_insert_id($connection)
        ], JSON_PRETTY_PRINT);
    } else {
        http_response_code(500);
        echo json_encode([
            "status" => false,
            "message" => "Insert failed"
        ], JSON_PRETTY_PRINT);
    }
}

mysqli_close($connection);
?>


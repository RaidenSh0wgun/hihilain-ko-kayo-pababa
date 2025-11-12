<?php
include_once("../connection/connection.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (!$id) {
    http_response_code(400); // Bad Request
    echo json_encode([
        "status" => false,
        "message" => "ID not provided!"
    ], JSON_PRETTY_PRINT);
    return;
}

$remove = $connection->prepare("DELETE FROM employees WHERE employee_id = ?");
$remove->bind_param("i", $id);
$remove->execute();

if ($remove->affected_rows === 0) {
    http_response_code(400);
    echo json_encode([
        "status" => false,
        "message" => "No employee was removed"
    ], JSON_PRETTY_PRINT);
} else {
    http_response_code(200);
    echo json_encode([
        "status" => true,
        "message" => "Employee ID: $id removed!"
    ], JSON_PRETTY_PRINT);
}

$remove->close();
$connection->close();
?>


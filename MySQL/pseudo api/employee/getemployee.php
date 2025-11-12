<?php
include_once("../connection/connection.php");

$employees = [];
$employee_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$query = $employee_id === 0
    ? "SELECT * FROM employees"
    : "SELECT * FROM employees WHERE employee_id = $employee_id";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $employees[] = $row;
}

if (count($employees) > 0) {
    http_response_code(200);
    echo json_encode(["status" => true, "data" => $employees], JSON_PRETTY_PRINT);
} else {
    http_response_code(404);
    echo json_encode(["status" => false, "message" => "No data found"], JSON_PRETTY_PRINT);
}

mysqli_close($connection);
?>


<?php
include_once("../connection/connection.php");

$input = json_decode(file_get_contents("php://input"), true);
$employee_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($employee_id === 0) {
    http_response_code(400);
    echo json_encode(["status" => false, "message" => "Missing employee ID for update"], JSON_PRETTY_PRINT);
} else {
    $name = $input['name'];
    $position = $input['position'];
    $salary = $input['salary'];

    $query = "UPDATE employees SET name = '$name', position = '$position', salary = $salary WHERE employee_id = $employee_id";
    $result = mysqli_query($connection, $query);

    if (mysqli_affected_rows($connection) > 0) {
        http_response_code(200);
        echo json_encode(["status" => true, "message" => "Employee updated"], JSON_PRETTY_PRINT);
    } else {
        http_response_code(404);
        echo json_encode(["status" => false, "message" => "No employee updated"], JSON_PRETTY_PRINT);
    }
}

mysqli_close($connection);
?>

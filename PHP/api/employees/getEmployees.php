<?php
    $employees = [];
    $employee_id = 0;
    if(isset($_GET['id'])){
        $employee_id = $_GET['id'];
    }
    // create query string
    // currently the query invites SQL injections
    $queryAllEmployees = $employee_id == 0 ? "SELECT * FROM employees" : "SELECT * FROM employees WHERE employee_id = $employee_id";
    // create a variable to store a query command
    // mysqli_query(connection_string, query_string);
    $getAllEmployees = mysqli_query($connection, $queryAllEmployees);

    // fetch all data from query command
    // mysqli_fetch_assoc(query)
    while($fetch = mysqli_fetch_assoc($getAllEmployees)){
        // json_encode -> make associative array into readable json string
        // $json = json_encode($fetch, JSON_PRETTY_PRINT);
        // json_decode -> make the readable json string into atn associative array for PHP
        // var_export(json_decode($json));
        // echo "<pre>".$json."</pre>";
        // echo "<br/><br/>";

        array_push($employees, $fetch);
    }
    
    // json_encode(array, options);
    
    if(count($employees) > 0){
        // emulates a return code response when used in postman/bruno
        http_response_code(200);
        echo json_encode(["status"=> true, "data"=>$employees], JSON_PRETTY_PRINT);
    }else{
        http_response_code(404);
        echo json_encode(["status"=> false, "message"=>"No data found"], JSON_PRETTY_PRINT);
    }

    mysqli_close($connection);
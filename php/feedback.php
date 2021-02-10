<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include("connection.php");

    function test_data($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlentities($data);
        return $data;
    }

    $star = test_data($_POST['star']);
    $name = test_data($_POST['name']);
    $msg = test_data($_POST['msg']);

    $query = "INSERT INTO feedback (star, name, msg) VALUES ('" . mysqli_real_escape_string($con, $star) . "','" . mysqli_real_escape_string($con, $name) . "','" . mysqli_real_escape_string($con, $msg) . "');";
    $result = mysqli_query($con, $query);
    if ($result == 0) {
        $data['status'] = "invalid";
        $data['msg'] = "Error saving your Feedback";
        echo json_encode($data);
    } else {
        $data['status'] = "success";
        echo json_encode($data);
    }
} else {
    $data['status'] = "error";
    echo json_encode($data);
}

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include("../php/connection.php");

    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $data['status'] = "invalid";
        $data['msg'] = "Invalid Email";
        echo json_encode($data);
    } else {
        function test_data($data)
        {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlentities($data);
            return $data;
        }

        $name = test_data($_POST['name']);
        $mobile = test_data($_POST['mobile']);
        $mail = test_data($_POST['mail']);
        $msg = test_data($_POST['msg']);

        $query = "INSERT INTO enquiry (name, mail, mobile, msg) VALUES ('" . mysqli_real_escape_string($con, $name) . "','" . mysqli_real_escape_string($con, $mail) . "','" . mysqli_real_escape_string($con, $mobile) . "','" . mysqli_real_escape_string($con, $msg) . "');";
        $result = mysqli_query($con, $query);
        if ($result == 0) {
            $data['status'] = "invalid";
            $data['msg'] = "Error saving your Enquiry";
            echo json_encode($data);
        } else {
            $data['status'] = "success";
            // $data['msg'] = $msg;
            echo json_encode($data);
        }
    }
} else {
    $data['status'] = "error";
    echo json_encode($data);
}

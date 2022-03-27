<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "appointment";

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['makeappointment'])) {
    $department = $_POST['department'];
    $staff_name = $_POST['doctor_name'];
    $date = $_POST['appoint_date'];
    $time = $_POST['appoint_time'];
    $user_name = $_POST['user_name'];
    $user_tel = $_POST['user_tel'];

    $addSql = "INSERT INTO `appointment` (`Appointment_date`, `Appointment_time`, `staff_name`, `staff_department`, `user_name`, `user_tel`) VALUES ('$date', '$time', '$staff_name', '$department', '$user_name', '$user_tel')";
    $result = mysqli_query($data, $addSql);

    if ($result) {
        echo '<script> alert("Message sent"); </script>';
    } else {
        echo '<script> alert("Message not sent"); </script>';
    }
}

<?php
include '../../connection.php';

if (isset($_POST["contactSubmit"])) {
    $name = $_POST["contactName"];
    $email = $_POST["contactEmail"];
    $subject = $_POST["contactSubject"];
    $message = $_POST["contactMsg"];
    $date = date("Y-m-d");

    $addSql = "INSERT INTO `contact` (`msgName`,`msgEmail`,`msgSubject`,`msgMessage`) VALUES ('$name','$email','$subject','$message')";
    $result = mysqli_query($data, $addSql);

    if ($result) {
        echo '<script> alert("Message sent"); </script>';
    } else {
        echo '<script> alert("Message not sent"); </script>';
    }

    
}

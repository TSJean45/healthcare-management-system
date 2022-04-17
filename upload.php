<?php
// Include the database configuration file
session_start();
include 'connection.php';


  if(isset($_POST['uploadPic'])){
    $file = $_FILES['file'];

    print_r($file);
  }
  
?>
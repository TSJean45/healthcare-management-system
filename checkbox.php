<?php

session_start();
    require_once('connection.php');

if (isset($_POST['deleteBtn'])) {

      foreach($_POST["delete_admin_id"] as $all_id )

      echo $all_id;
      // $deleteSql = "DELETE FROM `admin` WHERE `adminId` = $all_id";
      // $result = mysqli_query($data, $deleteSql);
    
      // if ($result) {
      //   echo '<script> alert("Data deleted"); </script>';
      // } else {
      //   echo '<script> alert("Data not deleted"); </script>';
      // }
    }
?>
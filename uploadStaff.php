<?php
if(isset($_POST['uploadPic'])){
  
  $file = $_FILES['file'];

  // print_r($file);

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if($fileSize <10000000){
        $loggedInUser = $_SESSION['staffId'];
        $prefixSql = "SELECT * FROM `staff` WHERE `staffId` ='$loggedInUser'";

        $prefixResult=mysqli_query($data,$prefixSql);
        if($prefixResult){
          while($row = mysqli_fetch_assoc($prefixResult)){
            $staffPrefix = $row['staffPrefix'];

        $fileNameNew = "profile".$staffPrefix.$loggedInUser.".".$fileActualExt;
        $fileDestination = 'upload/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "UPDATE `staff` set `staffImage_status`= 1 WHERE staffId = '$loggedInUser' ";
        $result = mysqli_query($data, $sql);
        echo '<div class="alert alert-success" role="alert">
                    Photo has been uploaded.</div>';
        }
      }
      else{
        echo  '<div class="alert alert-danger" role="alert">
                  File uploaded is too big.</div>';
        
      }
    }
    else{
      echo  '<div class="alert alert-danger" role="alert">
              There was an error uploading your image.</div>';
       
    }
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
    You cannot upload files of this type.</div>';
    
  }
}
}


?>
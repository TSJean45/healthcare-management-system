<? php
if (isset($_POST["upload_proficePic"])) {
    $file = $_FILES['file_proficePic'];
    $print_r = profil
    $fileName = $_FILES['file_proficePic']['name'];
    $filetTmpName = $_FILES['file_proficePic']['tmp_name'];
    $fileSize = $_FILES['file_proficePic']['size'];
    $fileError = $_FILES['file_proficePic']['error'];
    $fileType = $_FILES['file_proficePic']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
        if($fileSize <1000000){
          $fileNameNew = uniqid('',true).".".$fileActualExt;
          $fileDestination = 'upload/'.$fileNameNew;
          move_uploaded_file($filetTmpName, $fileDestination);
          echo "<script type='text/javascript'>alert('Success');</script>";
        }
        else{
          echo "<script type='text/javascript'>alert('File is too big');</script>";
        }
      }
      else{
         echo "<script type='text/javascript'>alert('There was an error uploading your file');</script>";
      }
    }
    else{
      echo "<script type='text/javascript'>alert('You cannot upload files of this type');</script>";
    }
}
?>
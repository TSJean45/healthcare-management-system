<?php
session_start();
include 'connection.php';

if (isset($_POST["submit"])) {


  $loggedInUser = $_SESSION['adminId'];
      
  $newName = $_POST["newName"];
  $newPhone = $_POST["newPhone"];
  $newGender = $_POST["newGender"];
  $newBirthdate = $_POST["newBirthdate"];
  $newAddress = $_POST["newAddress"];
  $newBio = $_POST["newBio"];
  $newQual = $_POST["newQual"];
  

  $editSql = "UPDATE `admin` SET `adminName`='$newName',`adminPhone_number`='$newPhone',`adminGender`='$newGender',`adminBirthdate`='$newBirthdate', `adminAddress`='$newAddress' , `adminBiography`='$newBio'
              , `adminQualification`='$newQual' WHERE `adminId`='$loggedInUser'";
  $editResult = mysqli_query($data, $editSql);

  if ($editResult) {
    $msg =  '<div class="alert alert-success" role="alert">
             Profile has been edited.</div>';
    
  } else {
    $msg =  '<div class="alert alert-danger" role="alert">
             Data not updated.</div>';
  }
}

if (isset($_POST["changePass"])) {


  $loggedInUser = $_SESSION['adminId'];
      
  $curPass = $_POST["curPass"];
  $newPass = $_POST["newPass"];
  $newCheckPass = $_POST["newCheckPass"];
    if($newPass  == $newCheckPass)
    {
      if(!empty($curPass)&&!empty($newPass)&&!empty($newCheckPass))
      {
        $checkSql = "SELECT adminPassword FROM admin WHERE `adminId`='$loggedInUser' AND `adminPassword` = $curPass";
        $checkResult = mysqli_query($data, $checkSql);

        if(mysqli_num_rows($checkResult) === 1){
          $changepassSql = "UPDATE `admin` SET `adminPassword` ='$newPass'  WHERE `adminId`='$loggedInUser'";
          $changeResult = mysqli_query($data, $changepassSql);
          // echo "<meta http-equiv='refresh' content='0'>";

          if ($changeResult) {
            $msg =  '<div class="alert alert-success" role="alert">
             Password changed.</div>';
          } else {
            $msg =  '<div class="alert alert-danger" role="alert">
             Password did not change.</div>';
          }
        }
        else{
          $msg =  '<div class="alert alert-danger" role="alert">
                    Incorrect Password entered.</div>';
        }
      }
      else{
        $msg =  '<div class="alert alert-danger" role="alert">
                    Please fill in the details.</div>';
                    
      }
    }
    else{
      $msg =  '<div class="alert alert-danger" role="alert">
                    Password does not match.</div>';
    }
}

if(isset($_POST['uploadPic'])){
  
  $file = $_FILES['imageAdmin'];

  // print_r($file);

  $fileName = $_FILES['imageAdmin']['name'];
  $fileTmpName = $_FILES['imageAdmin']['tmp_name'];
  $fileSize = $_FILES['imageAdmin']['size'];
  $fileError = $_FILES['imageAdmin']['error'];
  $fileType = $_FILES['imageAdmin']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if($fileSize <10000000){
        $loggedInUser = $_SESSION['adminId'];
        $prefixSql = "SELECT * FROM `admin` WHERE `adminId` ='$loggedInUser'";

        $prefixResult=mysqli_query($data,$prefixSql);
            if($prefixResult){
              while($row = mysqli_fetch_assoc($prefixResult)){
                  $adminPrefix = $row['adminPrefix'];

        $fileNameNew = "profile".$adminPrefix.$loggedInUser.".".$fileActualExt;
        $fileDestination = 'upload/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "UPDATE `admin` set `adminImage_status`= 1 WHERE adminId = '$loggedInUser' ";
        $result = mysqli_query($data, $sql);
        

        $msg = '<div class="alert alert-success" role="alert">
        Photo has been uploaded. </div>';
        }
      }
      else{
        $msg =  '<div class="alert alert-danger" role="alert">
                  File uploaded is too big.</div>';
        
      }
    }
    else{
      $msg =  '<div class="alert alert-danger" role="alert">
              There was an error uploading your image.</div>';
       
    }
  }
  else{
    $msg =  '<div class="alert alert-danger" role="alert">
    You cannot upload files of this type.</div>';
    
  }

}
else{
  $msg =  '<div class="alert alert-danger" role="alert">
  No image selected.</div>';
}
}


if(isset($_POST['removePic'])){
  $loggedInUser = $_SESSION['adminId'];

  $prefixSql = "SELECT * FROM `admin` WHERE `adminId` ='$loggedInUser'";
  $prefixResult=mysqli_query($data,$prefixSql);

  if($prefixResult){
    while($row = mysqli_fetch_assoc($prefixResult)){
        $adminPrefix = $row['adminPrefix'];
        $adminId = $row['adminId'];

  $fileName = 'upload/profile'.$adminPrefix.$adminId.'.jpg';

    if (unlink($fileName)) {
      $msg =  '<div class="alert alert-success" role="alert">
                      Image has been removed.</div>';
    } else {
      $msg =  '<div class="alert alert-danger" role="alert">
                      An error has occured.</div>';
    }
  
    $refreshSql = "UPDATE `admin` set `adminImage_status`= 0 WHERE adminId = '$loggedInUser' ";
    $refreshResult = mysqli_query($data, $refreshSql);

    $msg =  '<div class="alert alert-success" role="alert">
                    Image has been removed.</div>';
  }
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/navbar.css">
  <link rel="stylesheet" href="asset/css/adminstyle.css">

  <?php include('asset/includes/cssCDN.php'); ?>
  <title>Admin Profile</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>
</head>

<body>

  <?php $page = 'adminprofile';
  include('asset/includes/adminSidebar.php'); ?>

<section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Admin Profile</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
          <?php 
          $currentUser = $_SESSION['adminId'];
          $sql = "SELECT * FROM admin WHERE adminId ='$currentUser'";

          $result=mysqli_query($data,$sql);

          if($result){
            while($row = mysqli_fetch_assoc($result)){
                $prefix = $row['adminPrefix'];
                $id = $row['adminId'];
                $imageStatus = $row['adminImage_status'];
                
                if($imageStatus == 1)
                {
                  echo "<img src='upload/profile".$prefix.$id.".jpg'>";
                }
                else{
                  echo "<img src='asset/image/short-emp.jpg'>";
                }
              }
            }
          ?>
            <?php 

            $currentUser = $_SESSION['adminId'];
            $sql = "SELECT * FROM admin WHERE adminId ='$currentUser'";
  
            $result=mysqli_query($data,$sql);
  
            if($result){
              while($row = mysqli_fetch_assoc($result)){
                  $adminName = $row['adminName'];
                  
            ?>

            <span class="profile_name"><?php echo $adminName ?></span>
            <?php  } } ?>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </section>

  <section class="home-section">
    <div class="home-content">
      <!-- Overview Boxes-->
      <?php 
          $currentUser = $_SESSION['adminId'];
          $sql = "SELECT * FROM admin WHERE adminId ='$currentUser'";

          $result=mysqli_query($data,$sql);

          if($result){
            while($row = mysqli_fetch_assoc($result)){
                $prefix = $row['adminPrefix'];
                $id = $row['adminId'];
                $name = $row['adminName'];
                $email = $row['adminEmail'];
                $phone_number = $row['adminPhone_number'];
                $gender = $row['adminGender'];
                $address = $row['adminAddress'];
                $birthdate = $row['adminBirthdate'];
                $biography = $row['adminBiography'];
                $qualification = $row['adminQualification'];
                $imageStatus = $row['adminImage_status'];
              ?>
      <div class="profile">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 m-t35">
              <div class="card card-coin">
                
              </div>
            </div>
          </div>
          
          <div class="row profile-details">
            <div class="col-xl-3">
              <div class="card card-coin">
                <?php 
                if($imageStatus == 1)
                {
                  echo "<img src='upload/profile".$prefix.$id.".jpg' height='340' width='400'>";
                }
                else{
                  echo "<img src='asset/image/short-emp.jpg'>";
                }
              ?>
              </div>
            </div>
            <div class="col-xl-9 m-t35 my-auto">
            <?php
			    	if(isset($msg))
				    {
				     echo $msg;
				    }
			      ?>
              <div class="row">
                <div class="mr-auto pr-3">
                  <h2 class="font-w300 mb-sm-2 mb-1 text-black"><?php echo $name ?></h2>
                </div>
              </div>
              <div class="row">
                <div class="mr-auto pr-3">
                  <p class="mb-sm-2 mb-1"><?php echo $prefix . "" . $id; ?></p>
                  <p class="mb-sm-2 mb-1"><?php echo $email ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Phone Number:</h4>
                    <p><?php echo $phone_number ?></p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Gender:</h4>
                    <p><?php echo $gender ?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Birthdate:</h4>
                    <p><?php echo $birthdate ?></p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Address:</h4>
                    <p><?php echo $address ?></p>
                  </div>
                </div>
              </div>
             
      
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfile">
                Edit Profile
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadImage">
                Upload Image
              </button>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#changePass">
                Change Password
              </button>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12 p-3">
            <div class="mr-auto pr-3">
              <h4 class="fs-20 text-black font-w600">Biography</h4>
              <p>
              <?php echo $biography ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 p-3">
            <h4 class="fs-20 text-black font-w600">Qualification</h4>
            <p>
            <?php echo $qualification ?>
            </p>
          </div>
        </div>
         <?php
            }
          }
      ?>
      </div>
    </div>
  </section>

  <!-- Edit Modal -->
  <div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editprofile" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editprofile">Edit Your Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
            <div class="mb-3">
              <label for="inputName" class="form-label">Full Name</label>
              <input type="text" name ="newName" class="form-control" id="inputName" value="<?php echo $name ?>">
            </div>
            <div class="mb-3">
              <label for="inputPhone" class="form-label">Phone Number</label>
              <input type="tel" name ="newPhone" class="form-control" id="inputPhone" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" value="<?php echo $phone_number?>">
            </div>
            <div class="mb-3">
            <label for="editGender" class="form-label">Gender</label>
              <select id="editGender" class="form-control" name="newGender">
              <option value="Female" <?php if ($gender == "Female") echo "selected"; ?>>Female</option>
              <option value="Male" <?php if ($gender == "Male") echo "selected"; ?>>Male</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="inputBday" class="form-label">Birthdate</label>
              <input type="date" name="newBirthdate" class="form-control" id="inputBday" value="<?php echo $birthdate ?>">
            </div>
            <div class="mb-3">
              <label for="inputBio" class="form-label">Address</label>
              <input type="text" name="newAddress"class="form-control" id="inputPosition" value="<?php echo $address ?>">
            </div>
            <div class="mb-3">
              <label for="inputBio" class="form-label">Biography</label>
              <input type="text" name="newBio" class="form-control" id="inputPosition" value="<?php echo $biography ?>">
            </div>
            <div class="mb-3">
              <label for="inputQuali" class="form-label">Qualification</label>
              <input type="text" name="newQual"class="form-control" id="inputQuali" value="<?php echo $qualification ?>">
            </div>
        
        
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- Change Password Modal -->
  <div class="modal fade" id="changePass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changePass" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changePass">Change Your Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
            <div class="mb-3">
              <label for="inputOldPass" class="form-label">Existing Password</label>
              <input type="password" class="form-control" id="inputOldPass" name="curPass" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="inputNewPass" class="form-label">New Password</label>
              <input type="password" class="form-control" id="inputNewPass" name="newPass" >
            </div>
            <div class="mb-3">
              <label for="inputConPass" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="inputConPass" name="newCheckPass">
            </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="changePass" >Change Password</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- Upload Image Modal -->
  <div class="modal fade" id="uploadImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="uploadImage" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadImage">Upload Profile Picture or Cover</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action=" " method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
              <label>Upload Profile Picture</label>
              <input type="file" name="imageAdmin" class="form-control">
              <div class="input-group col-xs-12">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" name="uploadPic" type="submit">Upload</button>
                </span>
              </div>
            </div>
            <div class="mb-3">
            <input type="text" class="form-control file-upload-info" disabled placeholder="Please remove image before adding in new image">
            </div>
            
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="removePic">Remove Current Picture</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/deleteData.js"></script>
</body>

</html>
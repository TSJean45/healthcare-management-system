<?php
session_start();
include 'connection.php';

if (isset($_POST["submit"])) {


  $loggedInUser = $_SESSION['name'];
      
  $newName = $_POST["newName"];
  $newPhone = $_POST["newPhone"];
  $newGender = $_POST["newGender"];
  $newBirthdate = $_POST["newBirthdate"];
  $newAddress = $_POST["newAddress"];
  $newBio = $_POST["newBio"];
  $newQual = $_POST["newQual"];
  

  $editSql = "UPDATE `admin` SET `name`='$newName',`phone_number`='$newPhone',`gender`='$newGender',`birthdate`='$newBirthdate', `address`='$newAddress' , `biography`='$newBio'
              , `qualification`='$newQual' WHERE `name`='$loggedInUser'";
  $editResult = mysqli_query($data, $editSql);

  // var_dump($_SESSION['name']);

  if ($editResult) {
    echo '<script> alert("Data updated"); </script>';
  } else {
    echo '<script> alert("Data not updated"); </script>';
  }
}

if (isset($_POST["changePass"])) {


  $loggedInUser = $_SESSION['name'];
      
  $curPass = $_POST["curPass"];
  $newPass = $_POST["newPass"];
  $newCheckPass = $_POST["newCheckPass"];
    if($newPass  == $newCheckPass)
    {
      if(!empty($curPass)&&!empty($newPass)&&!empty($newCheckPass))
      {
        $checkSql = "SELECT password FROM admin WHERE `name`='$loggedInUser' AND `password` = $curPass";
        $checkResult = mysqli_query($data, $checkSql);

        if(mysqli_num_rows($checkResult) === 1){
          $changepassSql = "UPDATE `admin` SET `password` ='$newPass'  WHERE `name`='$loggedInUser'";
          $changeResult = mysqli_query($data, $changepassSql);

          if ($changeResult) {
            echo '<script> alert("Data updated"); </script>';
          } else {
            echo '<script> alert("Data not updated"); </script>';
          }
        }
        else{
          echo "<script type='text/javascript'>alert('Incorrect Password');</script>";
        }
      }
      else{
        echo "<script type='text/javascript'>alert('Please fill in the details');</script>";
      }
    }
    else{
      echo "<script type='text/javascript'>alert('Password does not matched');</script>";
    }
  // var_dump($_SESSION['name']);

 
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
    <div class="home-content">
      <!-- Overview Boxes-->
      <?php 
          $currentUser = $_SESSION['name'];
          $sql = "SELECT * FROM admin WHERE name ='$currentUser'";

          $result=mysqli_query($data,$sql);

          if($result){
            while($row = mysqli_fetch_assoc($result)){
                $prefix = $row['prefix'];
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone_number = $row['phone_number'];
                $gender = $row['gender'];
                $address = $row['address'];
                $birthdate = $row['birthdate'];
                $biography = $row['biography'];
                $qualification = $row['qualification'];

              ?>
                <div class="profile">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 m-t35">
              <div class="card card-coin">
                <img src="asset/image/long-emp.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="row profile-details">
            <div class="col-xl-3">
              <div class="card card-coin">
                <img src="asset/image/short-emp.jpg" alt="">
              </div>
            </div>
            <div class="col-xl-9 m-t35 my-auto">
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

  <!-- Modal -->
  <div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editprofile" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editprofile">Edit Your Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
          
            <!-- <div class="mb-3">
              <label>Upload Profile Picture</label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label>Upload Cover Photo</label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
              </div>
            </div> -->
            <div class="mb-3">
              <label for="inputName" class="form-label">Full Name</label>
              <input type="text" name ="newName" class="form-control" id="inputName" value="<?php echo $name ?>">
            </div>
            <div class="mb-3">
              <label for="inputPhone" class="form-label">Phone Number</label>
              <input type="text" name ="newPhone" class="form-control" id="inputPhone" value="<?php echo $phone_number?>">
            </div>
            <div class="mb-3">
              <label for="inputGender" class="form-label">Gender</label>
              <select id="inputGender" class="form-control" name="newGender" value="<?php echo $gender ?>">
                <option value="Female">Female</option>
                <option value="Male">Male</option>
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

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/deleteData.js"></script>
</body>

</html>
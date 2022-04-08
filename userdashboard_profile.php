<?php
session_start();
include 'connection.php';

if (isset($_POST["submit"])) {


  $loggedInUser = $_SESSION['userName'];
      
  $newName = $_POST["newName"];
  $newPhone = $_POST["newPhone"];
  $newGender = $_POST["newGender"];
  $newBirthdate = $_POST["newBirthdate"];
  $newAddress = $_POST["newAddress"];
  

  $editSql = "UPDATE `user` SET `userName`='$newName',`userPhone_number`='$newPhone',`userGender`='$newGender',`userBirthdate`='$newBirthdate'
              , `userAddress`='$newAddress'  WHERE `userName`='$loggedInUser'";
  $editResult = mysqli_query($data, $editSql);
  echo "<meta http-equiv='refresh' content='0'>";

 

  if ($editResult) {
    echo '<script> alert("Data updated"); </script>';
  } else {
    echo '<script> alert("Data not updated"); </script>';
  }
}

if (isset($_POST["changePass"])) {


  $loggedInUser = $_SESSION['userName'];
      
  $curPass = $_POST["curPass"];
  $newPass = $_POST["newPass"];
  $newCheckPass = $_POST["newCheckPass"];
    if($newPass  == $newCheckPass)
    {
      if(!empty($curPass)&&!empty($newPass)&&!empty($newCheckPass))
      {
        $checkSql = "SELECT userPassword FROM user WHERE `userName`='$loggedInUser' AND `userPassword` = $curPass";
        $checkResult = mysqli_query($data, $checkSql);

        if(mysqli_num_rows($checkResult) === 1){
          $changepassSql = "UPDATE `user` SET `userPassword` ='$newPass'  WHERE `userName`='$loggedInUser'";
          $changeResult = mysqli_query($data, $changepassSql);
          echo "<meta http-equiv='refresh' content='0'>";

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
}
?>
<!DoCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/userstyle.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/fb95a6dbf4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
        <title>User Profile</title>
    </head>
 
    <body>
      <section class="side">
        <div class="sidebar">
            <div class="sidebar-details">
                <div class="personal">
                    <div>
                        <img src="asset/image/profile1.jpg">
                        <span class="profile-name"><?php echo $_SESSION['userName']; ?></span>
                    </div>
                </div>
                <ul class="nav-links">
                  <li class="item">
                    <a href="#">
                      <i class='bx bx-grid-alt'></i>
                      <span class="links-name">User Dashboard</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="userdashboard_profile.html" class="active">
                      <i class='bx bxs-user-rectangle' ></i>
                      <span class="links-name">Profile</span>
                    </a>
                  </li>
                  <li class="item">
                    <a href="userdashboard_record.html">
                      <i class="fas fa-notes-medical"></i>
                      <span class="links-name">Medical Record</span>
                    </a>
                  </li>
                  <li class="item">
                      <a href="userdashboard_vaccine.html">
                        <i class="fas fa-syringe"></i>
                        <span class="links-name">Vaccination</span>
                      </a>
                    </li>
                    <li class="item">
                      <a href="userdashboard_appointment.html">
                      <i class="fas fa-calendar-check"></i>
                        <span class="links-name">Appointment</span>
                      </a>
                    </li>
                    <li class="item">
                      <a href="logout.php">
                        <i class='bx bx-log-out' ></i>
                        <span class="links-name">Log Out</span>
                      </a>
                    </li>
                </ul>
              </div>
            </div>
          </section>
 
        <section class="home-section">
        <div class="topbar">
            <nav>
                <div class="logo-details">
                    <img src="asset/image/logo.png" alt="" style="height: 250px; width: 250px;">
                  </div>
                <div class="right-nav">
                    <div class="search-box">
                        <input type="text" class="input" placeholder="Search...">
                        <div class="btn btn-common">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                      <div class="right noti-bell my-auto">
                        <i class='bx bxs-bell-ring' ></i>
                      </div>
                     
                      <div class="personal">
                        <div>
                          <img src="asset/image/profile1.jpg">
                        </div>
                      </div>
                </div>
              </nav>
        </div>
      </section>
   
      <section class="home-section">
        <div class="list-boxes">
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row justify-content-center">
                <div class="col-lg-10 grid-margin stretch-card" style="margin-top: 85px; margin-left: 250px;">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Profile</h4>
                      <div class="table-responsive">
                    <table class="table table-condensed">
                    <?php 
                      $currentUser = $_SESSION['userName'];
                      $sql = "SELECT * FROM user WHERE userName ='$currentUser'";

                      $result=mysqli_query($data,$sql);

                      if($result){
                      while($row = mysqli_fetch_assoc($result)){
                          $prefix = $row['userPrefix'];
                          $id = $row['userId'];
                          $name = $row['userName'];
                          $email = $row['userEmail'];
                          $phone_number = $row['userPhone_number'];
                          $gender = $row['userGender'];
                          $address = $row['userAddress'];
                          $birthdate = $row['userBirthdate'];
                          $dateCreated = $row['userDate_created'];
                          

                    ?>
                      <tbody>
                        <tr>
                            <td class="" rowspan="10" style="border: 50%; width:300px; height:400px;"><img src="asset/image/short-emp.jpg" class="rounded-3" style="border-radius: 50%; width:300px; height:400px;">
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editUserProfile" style="margin-top: 10px;">Edit Profile</button>
                            <button type="button" class="btn btn-warning" style="margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#changePass">
                             Change Password
                            </button></td>
                        </tr>
                        <tr>
                            <td class="" >User ID<span class="details"></br><?php echo $prefix . "" . $id; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                        <tr>
                          <td class="">User Name<span class="details"></br><?php echo $name; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                        <tr>
                            <td class="" >Date Of Birth<span class="details"></br><?php echo $birthdate; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                        <tr>
                            <td class="" >Gender<span class="details"></br><?php echo $gender; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                        <tr>
                            <td class="" >Phone Number<span class="details"></br><?php echo $phone_number; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                        <tr>
                            <td class="" >Email<span class="details"></br><?php echo $email; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                        <tr>
                          <td class="" >Address<span class="details"></br><?php echo $address; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                        <tr>
                          <td class="" >Account Created Date<span class="details"></br><?php echo $dateCreated; ?></span><a class="button" href=""><i class="fas fa-exclamation-circle"></i></a></td>
                        </tr>
                      </tbody>
                      <?php
            }
          }
      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- edit modal -->
  <div class="modal fade" id="editUserProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editUserprofile" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserprofile">Edit Your Profile</h5>
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
              <input type="text" name ="newPhone" class="form-control" id="inputPhone" value="<?php echo $phone_number?>">
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- change pass modal  -->
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
      </div>
    </div>
  </div>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
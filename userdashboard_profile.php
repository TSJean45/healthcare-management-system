<?php
session_start();
include 'connection.php';


if(!isset($_SESSION['userName']))
{
  header( "refresh:0;url=index.php#login-again-to-get-access" );
}

?>
<!DoCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="asset/css/userstyle.css?v=<?php echo time(); ?>">
  <?php include('asset/includes/cssCDN.php'); ?>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
  <title>My Profile</title>
</head>

<body>
  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

  <div class="container">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-3">
          <img src="asset/image/short-emp.jpg" class="img-fluid rounded-start" alt="Profile picture">
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editUserProfile" style="margin-top: 10px;">Edit Profile</button>
          <button type="button" class="btn btn-warning" style="margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#changePass">
            Change Password
          </button>
        </div>
        <div class="col-md-9">
          <div class="card-body">
            <h5 class="card-title">My Profile</h5>
            <?php if (isset($_POST["submit"])) {

              $loggedInUser = $_SESSION['userId'];
              $newName = $_POST["newName"];
              $newPhone = $_POST["newPhone"];
              $newGender = $_POST["newGender"];
              $newBirthdate = $_POST["newBirthdate"];
              $newAddress = $_POST["newAddress"];
              $newEmail = $_POST["newEmail"];

              $editSql = "UPDATE `user` SET `userName`='$newName',`userPhone_number`='$newPhone',`userGender`='$newGender',`userBirthdate`='$newBirthdate'
            , `userAddress`='$newAddress', `userEmail`='$newEmail'  WHERE `userId`='$loggedInUser'";
              $editResult = mysqli_query($data, $editSql);
              // echo "<meta http-equiv='refresh' content='0'>";

              if ($editResult) {
                echo '<div class="alert alert-success" role="alert">
                Profile successfully updated.
            </div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                Profile not updated.
            </div>';
              }
            }

            if (isset($_POST["changePass"])) {


              $loggedInUser = $_SESSION['userName'];

              $curPass = $_POST["curPass"];
              $newPass = $_POST["newPass"];
              $newCheckPass = $_POST["newCheckPass"];
              if ($newPass  == $newCheckPass) {
                if (!empty($curPass) && !empty($newPass) && !empty($newCheckPass)) {
                  $checkSql = "SELECT userPassword FROM user WHERE `userName`='$loggedInUser' AND `userPassword` = $curPass";
                  $checkResult = mysqli_query($data, $checkSql);

                  if (mysqli_num_rows($checkResult) === 1) {
                    $changepassSql = "UPDATE `user` SET `userPassword` ='$newPass'  WHERE `userName`='$loggedInUser'";
                    $changeResult = mysqli_query($data, $changepassSql);
                    echo "<meta http-equiv='refresh' content='0'>";

                    if ($changeResult) {
                      echo '<div class="alert alert-success" role="alert">
                      Password successfully changed.</div>';
                    } else {
                      echo '<div class="alert alert-danger" role="alert">
                      Password not changed.</div>';
                    }
                  } else {
                    echo '<div class="alert alert-danger" role="alert">
                    Incorrect password.</div>';
                  }
                }
              } else {
                echo '<div class="alert alert-danger" role="alert">
                Password does not matched.</div>';
              }
            } ?>
            <div class="table-responsive">
              <table class="table table-bordered table-condensed table-striped">
                <thead>
                </thead>
                <tbody>
                  <?php
                  $currentUser = $_SESSION['userId'];
                  $sql = "SELECT * FROM user WHERE userId ='$currentUser'";

                  $result = mysqli_query($data, $sql);

                  if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
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
                      <tr>
                        <td width="20%">ID</td>
                        <td><?php echo $prefix . "" . $id ?></td>
                      </tr>
                      <tr>
                        <td>Full Name</td>
                        <td><?php echo $name ?></td>
                      </tr>
                      <tr>
                        <td>Email Address</td>
                        <td><?php echo $email ?></td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td><?php echo $phone_number ?></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td><?php echo $gender ?></td>
                      </tr>
                      <tr>
                        <td>Birthdate</td>
                        <td><?php echo $birthdate ?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                      </tr>
                      <tr>
                        <td>Date Created</td>
                        <td><?php echo $dateCreated ?></td>
                      </tr>
                  <?php }
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
              <input type="text" name="newName" class="form-control" id="inputName" value="<?php echo $name ?>">
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email Address</label>
              <input type="email" name="newEmail" class="form-control" id="inputEmail" value="<?php echo $email ?>">
            </div>
            <div class="mb-3">
              <label for="inputPhone" class="form-label">Phone Number</label>
              <input type="tel" name="newPhone" class="form-control" id="inputPhone" pattern="[0-9]{3}-[0-9]{3-4}-[0-9]{3-4}" value="<?php echo $phone_number ?>">
            </div>
            <div class="mb-3">
              <label for="inputGender" class="form-label">Gender</label>
              <select id="inputGender" class="form-select" name="newGender" value="<?php echo $gender ?>">
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
              <input type="text" name="newAddress" class="form-control" id="inputPosition" value="<?php echo $address ?>">
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
              <input type="password" required class="form-control" id="inputOldPass" name="curPass" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="inputNewPass" class="form-label">New Password</label>
              <input type="password" required class="form-control" id="inputNewPass" name="newPass">
            </div>
            <div class="mb-3">
              <label for="inputConPass" class="form-label">Confirm Password</label>
              <input type="password" required class="form-control" id="inputConPass" name="newCheckPass">
            </div>

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="changePass">Change Password</button>
          </div>
      </div>
    </div>
  </div>

  <!--Footer -->
  <?php include('asset/includes/footer.php'); ?>
  <?php include('asset/includes/jsCDN.php'); ?>
</body>

</html>
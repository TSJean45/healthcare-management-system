<?php
    session_start();
    include 'connection.php';
    
    if (isset($_POST["addBtn"])) {
    $name = $_POST["addName"];
    $email = $_POST["addEmail"];
    $pass = $_POST["addPassword"];

    $addSql = "INSERT INTO `staff` (`staffName`,`staffEmail`,`staffPassword`) VALUES ('$name','$email','$pass')";
    $result = mysqli_query($data, $addSql);
    echo "<meta http-equiv='refresh' content='0'>";

      if ($result) {
        echo '<script> alert("Data added"); </script>';
      } else {
        echo '<script> alert("Data not added"); </script>';
      }
    }

    if (isset($_POST["editBtn"])) {
    $id = $_POST["editId"];  
    $name = $_POST["editName"];
    $position = $_POST["editPosition"];
    $department = $_POST["editDepartment"];
    $email = $_POST["editEmail"];

    $editSql = "UPDATE `staff` SET `staffName` ='$name', `staffEmail` = '$email', `staffPosition`= '$position', `staffDepartment` = '$department' WHERE `staffId`=$id";
    $result = mysqli_query($data, $editSql);
    echo "<meta http-equiv='refresh' content='0'>";

      if ($result) {
        echo '<script> alert("Data added"); </script>';
      } else {
         echo '<script> alert("Data not added"); </script>';
      }
    }

    if (isset($_POST['deleteBtn'])) {
      $id = $_POST["deleteID"];
  
      $deleteSql = "DELETE FROM `staff` WHERE `staffId`=$id";
      $result = mysqli_query($data, $deleteSql);
      echo "<meta http-equiv='refresh' content='0'>";
  
      if ($result) {
        echo '<script> alert("Data deleted"); </script>';
      } else {
        echo '<script> alert("Data not deleted"); </script>';
      }
  
      }
?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Medical Staff</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'stafflist';
  include('asset/includes/adminSidebar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Medical Staff</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
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
  

    <div class="home-content adminList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <div class="row mb-2">
              <div class="col-lg-5">
                <h4 class="card-title">Medical Staff List</h4>
              </div>
              <div class="col-lg-7">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addStaff">
                  Add Authorised Medical Staff
                  </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <th> Medical Staff Name </th>
                    <th> Medical Staff ID </th>
                    <th> Medical Staff Email Address </th>
                    <th>Position</th>
                    <th>Department</th>
                    <th> Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                        $viewSql = "SELECT * FROM staff";
                        $result=mysqli_query($data,$viewSql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result))
                            {
                              $prefix = $row['staffPrefix'];
                              $id = $row['staffId'];
                              $name = $row['staffName'];
                              $email = $row['staffEmail'];
                              $birthdate = $row['staffBirthdate'];
                              $number = $row['staffPhone_number'];
                              $gender = $row['staffGender'];
                              $address = $row['staffAddress'];
                              $position = $row['staffPosition'];
                              $department = $row['staffDepartment'];
                              $biography = $row['staffBiography'];
                              $qualification = $row['staffQualification'];
                        ?>     
                            <tr>
                                <td class="py-1">
                                    <?php echo $name ?>
                                </td>
                                <td><?php echo $prefix . "" . $id; ?></td>
                                <td>
                                    <?php echo $email ?>
                                </td>
                                <td><?php echo $position ?></td>
                                <td><?php echo $department ?></td>
                                <td class="action-button">
                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewProfile<?php echo $id; ?>">
                                      <i class="fas fa-eye"></i></button>
                                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff<?php echo $id; ?>">
                                  <i class="fas fa-edit"></i></button>
                                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData<?php echo $id; ?>">
                                  <i class="fas fa-trash-alt"></i></button>
                              </td>
                            </tr>


  <!-- Delete Modal -->
  <div class="modal fade" id="deleteData<?php echo $id; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="deleteID" value="<?php echo $id; ?>">
                              </div>
                              <div class="mb-3">
                                Are you sure that you want to delete the selected data?
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="deleteBtn">Yes</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>         

  <!-- Add Modal  -->
  <div class="modal fade" id="addStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addStaffLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addStaff">Add Authorised Medical Staff</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="" method="POST">
            <div class="mb-3">
              <label for="inputName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="inputName" name="addName" required>
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" name="addEmail" value="@staff.jjj.com" required>
            </div>
            <div class="mb-3">
              <label for="inputPass" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPass" name="addPassword" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="addBtn" >Add</button>
        </div>
      </form>
      </div>
    </div>
  </div>

   <!-- Edit Modal  -->
  <div class="modal fade" id="editStaff<?php echo $id; ?>"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editStaff">Edit Authorised Medical Staff</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="editName" class="form-label">Medical Staff Name</label>
              <input type="text" class="form-control" id="editName" name="editName" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" id="editId" name="editId" value="<?php echo $id; ?>">
            </div>
            <div class="mb-3">
              <label for="editEmail" class="form-label">Medical Staff Email</label>
              <input type="text" class="form-control" id="editEmail" name="editEmail" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
              <label for="editPosition" class="form-label">Position</label>
              <input type="text" class="form-control" id="editPosition" name="editPosition" value="<?php echo $position; ?>">
            </div>
            <div class="mb-3">
              <label for="editDepartment" class="form-label">Deparment</label>
              <select id="editDeparment" class="form-control" name="editDepartment">
              <option value="Podiatrist" <?php if ($department == "Podiatrist") echo "selected"; ?>>Podiatrist</option>
              <option value="Pediatrician" <?php if ($department == "Pediatrician") echo "selected"; ?>>Pediatrician</option>
              <option value="Endocrinologist" <?php if ($department == "Endocrinologist") echo "selected"; ?>>Endocrinologist</option>
              <option value="Neurologist" <?php if ($department == "Neurologist") echo "selected"; ?>>Neurologist</option>
              <option value="Rheumatologist" <?php if ($department == "Rheumatologist") echo "selected"; ?>>Rheumatologist</option>
              <option value="Immunologist" <?php if ($department == "Immunologist") echo "selected"; ?>>Immunologist</option>
              <option value="Phychiatrist" <?php if ($department == "Phychiatrist") echo "selected"; ?>>Phychiatrist</option>
              <option value="Cardiologist" <?php if ($department == "Cardiologist") echo "selected"; ?>>Cardiologist</option>
              <option value="Hepatologist" <?php if ($department == "Hepatologist") echo "selected"; ?>>Hepatologist</option>
              </select>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="editBtn">Save Changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>   

  <!-- View Modal  -->
  <div class="modal fade" id="viewProfile<?php echo $id; ?>"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewProfile">View Medical Staff Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="viewName" class="form-label"> Name</label>
              <input type="text" class="form-control"  value="<?php echo $name; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewEmail" class="form-label">Email</label>
              <input type="text" class="form-control"  value="<?php echo $email; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewNumber" class="form-label">Phone Number</label>
              <input type="text" class="form-control" value="<?php echo $number; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewBirthdate" class="form-label">Birthdate</label>
              <input type="text" class="form-control" value="<?php echo $birthdate; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewAddress" class="form-label">Address</label>
              <input type="text" class="form-control" value="<?php echo $address; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewDepartment" class="form-label">department</label>
              <input type="text" class="form-control" value="<?php echo $address; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewPosition" class="form-label">Position</label>
              <input type="text" class="form-control" value="<?php echo $address; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewGender" class="form-label">Gender</label>
              <input type="text" class="form-control" value="<?php echo $gender; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewBio" class="form-label">Biography</label>
              <input type="text" class="form-control" value="<?php echo $biography; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewQual" class="form-label">Qualification</label>
              <input type="text" class="form-control" value="<?php echo $qualification; ?>" readonly>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>      

  <?php } }
   ?>        
    </tbody>
      </table>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  



  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/deleteData.js"></script>

</body>

</html>
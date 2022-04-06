<?php
    session_start();
    include 'connection.php';
    
    if (isset($_POST["addBtn"])) {
    $name = $_POST["inputName"];
    $email = $_POST["inputEmail"];
    $pass = $_POST["inputPass"];

    $addSql = "INSERT INTO `staff` (`name`,`email`,`password`) VALUES ('$name','$email','$pass')";
    $result = mysqli_query($data, $addSql);

      if ($result) {
        echo '<script> alert("Data added"); </script>';
      } else {
        echo '<script> alert("Data not added"); </script>';
      }
    }

    if (isset($_POST["editBtn"])) {
    $name = $_POST["inputName"];
    $position = $_POST["inputPosition"];
    $department = $_POST["inputDepartment"];

    $editSql = "UPDATE INTO `staff` SET `name` = '$name',`position`= '$position', `department` = '$department'";
    $result = mysqli_query($data, $editSql);

      if ($result) {
        echo '<script> alert("Data added"); </script>';
      } else {
       echo '<script> alert("Data not added"); </script>';
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
            <span class="profile_name"><?php echo $_SESSION['name']; ?></span>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </section>

  <section class="home-section ">
    <div class="home-content adminList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Medical Staff List</h4>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> No</th>
                    <th> Medical Staff Name </th>
                    <th> Medical Staff ID </th>
                    <th> Medical Staff Email Address </th>
                    <th>Position</th>
                    <th>Department</th>
                    <th> Action </th>
                  </tr>
                  <?php
                        $viewSql = "SELECT * FROM staff";
                        $result=mysqli_query($data,$viewSql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result))
                            {
                              $prefix = $row['prefix'];
                              $id = $row['id'];
                              $name = $row['name'];
                              $email = $row['email'];
                              $position = $row['position'];
                              $department = $row['department'];
                        ?>     
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        </label>
                                      </div>
                                </td>   
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
                                  <button type="button" class="btn btn-light">
                                    <a href="adminViewStaffProfile.html">
                                    <i class="fas fa-eye"></i></a></button>
                                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
                                  <i class="fas fa-edit"></i></button>
                              </td>
                            </tr>
                            <?php } } ?>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="mx-1">
                  <button type="button" class="btn btn-danger float-right" data-bs-toggle="modal" data-bs-target="#deleteStaff">
                    Delete Authorised Medical Staff
                  </button>
                </div>
                <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addStaff">
                    Add Authorised Medical Staff
                  </button>
                </div>
              </div>
              <div class="d-flex flex-row my-auto">
                <button type="button" class="btn"><i class="fas fa-arrow-circle-left fa-lg"></i></button>
                <h5 class="my-auto">1</h5>
                <button type="button" class="btn"><i class="fas fa-arrow-circle-right fa-lg"></i></button></td>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="deleteStaff" tabindex="-1" aria-labelledby="deleteStaffLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteStaffLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure that you want to delete the selected medical staff?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addStaffLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addStaff">Add Authorised Medical Staff</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">ID</label>
              <input type="text" class="form-control" id="inputID">
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="mb-3">
              <label for="inputPass" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPass">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Add</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editStaffLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editStaff">Edit Authorised Medical Staff</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputName" class="form-label">Medical Staff Name</label>
              <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">Medical Staff ID</label>
              <input type="text" class="form-control" id="inputID">
            </div>
            <div class="mb-3">
              <label for="inputPosition" class="form-label">Position</label>
              <input type="text" class="form-control" id="inputPosition">
            </div>
            <div class="mb-3">
              <label for="inputDepartment" class="form-label">Department</label>
              <input type="text" class="form-control" id="inputDepartment">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save Changes</button>
        </div>
      </div>
    </div>
  </div>



  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/deleteData.js"></script>

</body>

</html>
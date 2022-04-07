<?php
include 'connection.php';

// Add Data
if (isset($_POST["addBtn"])) {
  $userID = $_POST["inputDataName"];
  $staffID = $_POST["inputStaff"];
  $date = $_POST["inputDateAdmitted"];
  $dis = $_POST["inputDisease"];
  $status = $_POST["inputRecStatus"];

  $userQuery = mysqli_query($data, "SELECT `userName` FROM `user` where `userId` = '$userID' ");
  $userResult = mysqli_fetch_row($userQuery);
  $uName = implode(" ", $userResult);

  $addSql = "INSERT INTO `medrec` (`userName`,`userID`,`staffID`,`recDate`,`recDisease`,`recStatus`) 
  VALUES ('$uName','$userID','$staffID','$date','$dis','$status')";
  $result = mysqli_query($data, $addSql);

  if ($result) {
    echo '<script> alert("Data added"); </script>';
  } else {
    echo '<script> alert("Data not added"); </script>';
  }
}

// Edit Data
if (isset($_POST["editBtn"])) {
  $id = $_POST["editID"];
  $userID = $_POST["editName"];
  $staffID = $_POST["editStaff"];
  $date = $_POST["editDate"];
  $dis = $_POST["editDisease"];
  $status = $_POST["editStatus"];

  $userQuery = mysqli_query($data, "SELECT `userName` FROM `user` where `userId` = '$userID' ");
  $userResult = mysqli_fetch_row($userQuery);
  $uName = implode(" ", $userResult);

  $editSql = "UPDATE `medrec` SET `userName`='$uName',`userID`='$userID',`staffID`='$staffID',`recDate`='$date',`recDisease`='$dis',`recStatus`='$status' WHERE `recID`='$id'";
  $result = mysqli_query($data, $editSql);

  if ($result) {
    echo '<script> alert("Data updated"); </script>';
  } else {
    echo '<script> alert("Data not updated"); </script>';
  }
}

// Delete Data
if (isset($_POST['deleteBtn'])) {
  $id = $_POST["deleteID"];

  $deleteSql = "DELETE FROM `medrec` WHERE `recID`=$id";
  $result = mysqli_query($data, $deleteSql);

  if ($result) {
    echo '<script> alert("Data deleted"); </script>';
  } else {
    echo '<script> alert("Data not deleted"); </script>';
  }
}
?>

<!DOCTYPE html>

<head>
  <?php include('asset/includes/cssCDN.php'); ?>

  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <title>Medical Record</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'staffMedrec';
  include('asset/includes/staffSideBar.php'); ?>

  <section class="home-section ">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Medical Record</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
            <span class="profile_name">Tan Szu Jean</span>
          </div>
        </div>
      </div>
      </div>
    </nav>

    <div class="home-content">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row mb-2">
              <div class="col-lg-5">
                <h4 class="card-title">Medical Record List</h4>
              </div>
              <div class="col-lg-7">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-1">
                    <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addData">
                      Add Medical Record
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive table-medRec">
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <th>Record ID</th>
                    <th class="d-none">ID</th>
                    <th> User Name </th>
                    <th> User ID </th>
                    <th>Medical Staff</th>
                    <th> Date Admitted</th>
                    <th> Disease </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                  $viewSql = "SELECT * FROM `medrec` INNER JOIN  `user` ON  medrec.userID = user.userId
                  INNER JOIN `staff`  ON  medrec.staffID=staff.staffId";
                  $result = mysqli_query($data, $viewSql);

                  while ($row = mysqli_fetch_assoc($result)) {
                    $rpre = $row['recPrefix'];
                    $rid = $row['recID'];
                    $uid = $row['userID'];
                    $name = $row['userName'];
                    $upre = $row['userPrefix'];
                    $sname = $row['staffName'];
                    $dis = $row['recDisease'];
                    $date = $row['recDate'];
                    $status = $row['recStatus'];

                    if ($status == "New") {
                      $color = "btn-info";
                      $logo = "fa-check-circle";
                    } else if ($status == "In Treatment") {
                      $color = "btn-danger";
                      $logo = "fa-heartbeat";
                    } else if ($status == "Recovered") {
                      $color = "btn-success";
                      $logo = "fa-check-circle";
                    }

                  ?>
                    <tr>
                      <td><?php echo $rpre . "" . $rid; ?></td>
                      <td class="d-none"><?php echo $rid; ?></td>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $upre . "" . $uid; ?></td>
                      <td><?php echo $sname; ?></td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $dis; ?></td>
                      <td>
                        <button type="button" class="btn <?php echo $color; ?>">
                          <i class="fas <?php echo $logo; ?>"><?php echo $status; ?></i>
                        </button>
                      </td>
                      <td class="action-button">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editData<?php echo $rid; ?>">
                          <i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData<?php echo $rid; ?>">
                          <i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <!-- Delete Record -->
                    <div class="modal fade" id="deleteData<?php echo $rid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="deleteID" value="<?php echo $rid; ?>">
                              </div>
                              <div class="mb-3">
                                Are you sure that you want to delete the selected data?
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="deleteBtn">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Edit Record -->
                    <div class="modal fade" id="editData<?php echo $rid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editData">Edit Record Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="editID" value="<?php echo $rid; ?>">
                              </div>
                              <div class="mb-3">
                                <?php
                                $userSql = "SELECT * FROM `user`";
                                $user = mysqli_query($data, $userSql);
                                ?>
                                <label for="editName" class="form-label">User Name</label>
                                <select id="editName" class="form-control select2me" name="editName">
                                  <?php while ($fetch = mysqli_fetch_array($user)) :; ?>
                                    <?php $uid = $fetch['userId'];
                                    $prefix = $fetch['userPrefix'];
                                    $userName = $fetch['userName']; ?>
                                    <option value="<?php echo $uid; ?>" <?php if ($name == "$userName") echo "selected"; ?>><?php echo $prefix . "" . $uid . " - " . $userName; ?></option>
                                  <?php endwhile; ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <?php
                                $staffSql = "SELECT * FROM `staff`";
                                $staff = mysqli_query($data, $staffSql);
                                ?>
                                <label for="editStaff" class="form-label">Assigned Medical Staff</label>
                                <select id="editStaff" class="form-control select2me" name="editStaff">
                                  <?php while ($fetch = mysqli_fetch_array($staff)) :; ?>
                                    <?php $sid = $fetch['staffId'];
                                    $prefix = $fetch['staffPrefix'];
                                    $staffName = $fetch['staffName']; ?>
                                    <option value="<?php echo $sid; ?>" <?php if ($sname == "$staffName") echo "selected"; ?>><?php echo $prefix . "" . $sid . " - " . $staffName; ?></option>
                                  <?php endwhile; ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="editDate" class="form-label">Date Admitted</label>
                                <input type="date" class="form-control" value="<?php echo $date; ?>" name="editDate">
                              </div>
                              <div class="mb-3">
                                <label for="editDisease" class="form-label">Disease</label>
                                <input type="text" class="form-control" value="<?php echo $dis; ?>" name="editDisease">
                              </div>
                              <div class="mb-3">
                                <label for="editStatus" class="form-label">Status</label>
                                <select id="editStatus" class="form-control" name="editStatus">
                                  <option value="New" <?php if ($status == "New") echo "selected"; ?>>New</option>
                                  <option value="In Treatment" <?php if ($status == "In Treatment") echo "selected"; ?>>In Treatment</option>
                                  <option value="Recovered" <?php if ($status == "Recovered") echo "selected"; ?>>Recovered</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" name="editBtn">Update Changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php  }
                  ?>
                </tbody>


              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Form-->
  <!-- Add Record -->
  <div class="modal fade" id="addData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addRecLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addData">Add Medical Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="mb-3">
              <?php
              $userSql = "SELECT * FROM `user`";
              $user = mysqli_query($data, $userSql); ?>
              <label for="inputDataName" class="form-label">User Name</label>
              <select id="inputDataName" class="form-select select2me" name="inputDataName" title="Select User" data-live-search="true">
                <?php while ($fetch = mysqli_fetch_array($user)) :; ?>
                  <?php $id = $fetch['userId'];
                  $prefix = $fetch['userPrefix'];
                  $name = $fetch['userName']; ?>
                  <option value="<?php echo $id; ?>"><?php echo $prefix . "" . $id . " - " . $name; ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <div class="mb-3">
              <?php
              $staffSql = "SELECT * FROM `staff`";
              $staff = mysqli_query($data, $staffSql); ?>
              <label for="inputStaff" class="form-label">Assigned Medical Staff</label>
              <select id="inputStaff" class="form-select select2me" name="inputStaff" title="Select Staff" data-live-search="true">
                <?php while ($fetch = mysqli_fetch_array($staff)) :; ?>
                  <?php $id = $fetch['staffId'];
                  $prefix = $fetch['staffPrefix'];
                  $name = $fetch['staffName']; ?>
                  <option value="<?php echo $id; ?>"><?php echo $prefix . "" . $id . " - " . $name; ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="inputDateAdmitted" class="form-label">Date Admitted</label>
              <input type="date" class="form-control" name="inputDateAdmitted">
            </div>
            <div class="mb-3">
              <label for="inputDisease" class="form-label">Disease</label>
              <input type="text" class="form-control" name="inputDisease">
            </div>
            <div class="mb-3">
              <label for="inputRecStatus" class="form-label">Status</label>
              <select name="inputRecStatus" class="form-control" name="inputRecStatus">
                <option value="New">New</option>
                <option value="In Treatment">In Treatment</option>
                <option value="Recovered">Recovered</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" name="addBtn">Add Record</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>

</body>

</html>
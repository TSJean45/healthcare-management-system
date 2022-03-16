<?php
include 'connection.php';

// Add Data
if (isset($_POST["addBtn"])) {
  $name = $_POST["inputDataName"];
  $uidString = $_POST["inputID"];
  $uid = SUBSTR($uidString, 2, 5);
  $sidString = $_POST["inputStaff"];
  $sid = SUBSTR($sidString, 2, 5);
  $date = $_POST["inputDateAdmitted"];
  $dis = $_POST["inputDisease"];
  $status = $_POST["inputRecStatus"];

  $addSql = "INSERT INTO `medrec` (`userName`,`userID`,`staffID`,`recDate`,`recDisease`,`recStatus`) 
  VALUES ('$name','$uid','$sid','$date','$dis','$status')";
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
  $name = $_POST["editName"];
  $uidString = $_POST["editUID"];
  $uid = SUBSTR($uidString, 2, 5);
  $sidString = $_POST["editSID"];
  $sid = SUBSTR($sidString, 2, 5);
  $date = $_POST["editDate"];
  $dis = $_POST["editDisease"];
  $status = $_POST["editStatus"];

  $editSql = "UPDATE `medrec` SET `userName`='$name',`userID`='$uid',`staffID`='$sid',`recDate`='$date',`recDisease`='$sid',`recStatus`='$status' WHERE `recID`='$id'";
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
              <?php
              $viewSql = "SELECT * FROM `medrec`";
              $result = mysqli_query($data, $viewSql);
              ?>
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
                <?php

                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $rpre = $row['recPrefix'];
                    $rid = $row['recID'];
                    $name = $row['userName'];
                    $upre = $row['userPrefix'];
                    $uid = $row['userID'];
                    $spre = $row['staffPrefix'];
                    $sid = $row['staffID'];
                    $dis = $row['recDisease'];
                    $date = $row['recDate'];
                    $status = $row['recStatus'];

                    if ($status == "New") {
                      $color = "btn-outline-info";
                      $logo = "fa-check-circle";
                    } else if ($status == "In Treatment") {
                      $color = "btn-outline-danger";
                      $logo = "fa-heartbeat";
                    } else if ($status == "Recovered") {
                      $color = "btn-outline-success";
                      $logo = "fa-check-circle";
                    }

                ?>
                    <tbody>
                      <tr>
                        <td><?php echo $rpre . "" . $rid; ?></td>
                        <td class="d-none"><?php echo $rid; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $upre . "" . $uid; ?></td>
                        <td><?php echo $spre . "" . $sid; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $dis; ?></td>
                        <td>
                          <button type="button" class="btn <?php echo $color; ?>">
                            <i class="fas <?php echo $logo; ?>"><?php echo $status; ?></i>
                          </button>
                        </td>
                        <td class="action-button">
                          <button type="button" class="btn btn-light editBtn">
                            <i class="fas fa-edit"></i></button>
                          <button type="button" class="btn btn-danger deleteBtn">
                            <i class="fas fa-trash-alt"></i></button>
                        </td>
                      </tr>
                    </tbody>
                <?php  }
                }
                ?>

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
          <form action="" method="POST" name="addData">
            <div class="mb-3">
              <label for="inputDataName" class="form-label">User Name</label>
              <input type="text" class="form-control" name="inputDataName">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">User ID</label>
              <input type="text" class="form-control" name="inputID">
            </div>
            <div class="mb-3">
              <label for="inputStaff" class="form-label">Assigned Medical Staff ID</label>
              <input type="text" class="form-control" name="inputStaff">
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

  <!-- Delete Record -->
  <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" name="deleteData">
            <div class="mb-3">
              <input type="hidden" name="deleteID" id="deleteID">
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

  <!-- Edit Record -->
  <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editData">Edit Record Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" name="editData">
            <div class="mb-3">
              <input type="hidden" name="editID" id="editID">
            </div>
            <div class="mb-3">
              <label for="editName" class="form-label">User Name</label>
              <input type="text" class="form-control" id="editName" name="editName">
            </div>
            <div class="mb-3">
              <label for="editUID" class="form-label">User ID</label>
              <input type="text" class="form-control" id="editUID" name="editUID">
            </div>
            <div class="mb-3">
              <label for="editSID" class="form-label">Medical Staff Assigned</label>
              <input type="text" class="form-control" id="editSID" name="editSID">
            </div>
            <div class="mb-3">
              <label for="editDate" class="form-label">Date Admitted</label>
              <input type="date" class="form-control" id="editDate" name="editDate">
            </div>
            <div class="mb-3">
              <label for="editDisease" class="form-label">Disease</label>
              <input type="text" class="form-control" id="editDisease" name="editDisease">
            </div>
            <div class="mb-3">
              <label for="editStatus" class="form-label">Status</label>
              <select id="editStatus" class="form-control" name="editStatus">
                <option value="New">New</option>
                <option value="In Treatment">In Treatment</option>
                <option value="Recovered">Recovered</option>
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

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/triggerToast.js"></script>
  <script src="asset/js/deleteData.js"></script>

  <script>
    $(document).on('click', '.editBtn', function() {
      $('#editData').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#editID').val(data[1]);
      $('#editName').val(data[2]);
      $('#editUID').val(data[3]);
      $('#editSID').val(data[4]);
      $('#editDate').val(data[5]);
      $('#editDisease').val(data[6]);
      $('#editStatus option:selected').text(data[7]);
    });
  </script>

</body>

</html>
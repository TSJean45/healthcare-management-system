<?php
session_start();
require_once('connection.php');
?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="asset/css/navbar.css?v=<?php echo time(); ?>">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Appointment</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'staffApp';
  include('asset/includes/staffSideBar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Appointment</span>
      </div>
      <div class="right-nav">
        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
            <?php

            $currentUser = $_SESSION['staffId'];
            $sql = "SELECT * FROM staff WHERE staffId ='$currentUser'";

            $result = mysqli_query($data, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $staffName = $row['staffName'];
                $currentUserPosition = $row['staffPosition'];

            ?>

                <span class="profile_name"><?php echo $staffName ?></span>

            <?php }
            } ?>
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
                <h4 class="card-title">Appointment Details</h4>
              </div>
              <div class="col-lg-7">
                <div class="d-flex flex-row-reverse">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addData">
                    Add Appointment
                  </button>
                </div>
              </div>
            </div>
            <?php
            if (isset($_POST["addBtn"])) {
              $uid = $_POST['inputDataName'];
              $date = $_POST['inputDate'];
              $time = $_POST['inputTime'];
              $note = $_POST['inputNote'];
              if ($currentUserPosition == "Staff") {
                $sid = $_POST['inputStaffId'];
                $status = "Booked";
              } else if ($currentUserPosition == "Doctor") {
                $sid = $_SESSION['staffId'];
                $status = "Scheduled";
              }

              $addSql = "INSERT INTO `appointment` (`appointmentDate`,`appointmentTime`,`appointmentReason`,`appointmentStatus`,`staffId`,`userId`) 
              VALUES ('$date','$time','$note','$status','$sid','$uid')";
              $result = mysqli_query($data, $addSql);

              if ($result) {
                if ($currentUserPosition == "Staff") {
                  echo '<div class="alert alert-success" role="alert">
                Appointment successfully booked. Booked status has sent to the patient and doctor assigned. 
            </div>';
                } else if ($currentUserPosition == "Doctor") {
                  echo '<div class="alert alert-success" role="alert">
                Appointment successfully added. Confirmation status has sent to the patient. 
            </div>';
                }
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not added. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["confirmBtn"])) {
              $id = $_POST["acceptID"];
              $status = "Scheduled";

              $editSql = "UPDATE `appointment` SET `appointmentStatus`='$status' WHERE `appointmentID`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                Appointment successfully scheduled. Scheduled status has sent to the patient. 
            </div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not scheduled. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["completeBtn"])) {
              $id = $_POST["completeID"];
              $status = "Completed";

              $editSql = "UPDATE `appointment` SET `appointmentStatus`='$status' WHERE `appointmentID`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                Appointment successfully completed. 
            </div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not completed. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["cancelBtn"])) {
              $id = $_POST["cancelID"];
              $status = "Cancelled";

              $editSql = "UPDATE `appointment` SET `appointmentStatus`='$status' WHERE `appointmentID`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                Appointment successfully cancelled. Cancellation status has sent to the patient. 
            </div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not cancelled. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["editBtn"])) {
              $id = $_POST["editID"];
              $date = $_POST["editDate"];
              $time = $_POST["editTime"];
              if ($currentUserPosition == "Staff") {
                $sid = $_POST['editStaffId'];
                $status = "Booked";
              } else if ($currentUserPosition == "Doctor") {
                $sid = $_SESSION['staffId'];
                $status = "Scheduled";
              }

              $editSql = "UPDATE `appointment` SET `appointmentDate`='$date',`appointmentTime`='$time',`appointmentStatus`='$status',`staffId`='$sid' WHERE `appointmentID`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                if ($currentUserPosition == "Staff") {
                  echo '<div class="alert alert-success" role="alert">
                Appointment successfully edited. Updated booked status has sent to the patient and doctor assigned. 
            </div>';
                } else if ($currentUserPosition == "Doctor") {
                  echo '<div class="alert alert-success" role="alert">
                Appointment successfully edited. Scheduled status has sent to the patient. 
            </div>';
                }
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not edited. Please try again later.
                </div>';
              }
            }
            ?>
            <div class="table-responsive">
              <table class="table table-hover table-condensed " id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <th>ID </th>
                    <th class="d-none">ID</th>
                    <?php if ($currentUserPosition == "Staff") {
                      echo "<th> Doctor Assigned</th>";
                    } ?>
                    <th>Patient Detail</th>
                    <th> Appointment Date </th>
                    <th> Appointment Time </th>
                    <th> Appointment Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $currentUser = $_SESSION['staffId'];
                  if ($currentUserPosition == "Doctor") {
                    $viewSql = "SELECT * FROM `appointment` INNER JOIN  `user` ON  appointment.userId = user.userId
                  INNER JOIN `staff`  ON  appointment.staffId=staff.staffId WHERE appointment.staffId='$currentUser'";
                  } else if ($currentUserPosition == "Staff") {
                    $viewSql = "SELECT * FROM `appointment` INNER JOIN  `user` ON  appointment.userId = user.userId
                    INNER JOIN `staff`  ON  appointment.staffId=staff.staffId";
                  }
                  $result = mysqli_query($data, $viewSql);
                  while ($row = mysqli_fetch_array($result)) {
                    $aprefix = $row['appointmentPrefix'];
                    $aid = $row['appointmentID'];
                    $date = $row['appointmentDate'];
                    $time = $row['appointmentTime'];
                    $status = $row['appointmentStatus'];
                    $reason = $row['appointmentReason'];
                    $uid = $row['userId'];
                    $uprefix = $row['userPrefix'];
                    $uname = $row['userName'];
                    $currentDate = date("Y-m-d");
                    $sprefix = $row['staffPrefix'];
                    $sid = $row['staffId'];
                    $sname = $row['staffName'];

                    if ($status == "Booked") {
                      $color = "btn-secondary";
                      $error = "";
                      $errorTick = "";
                      $target = "accept";
                    } else if ($status == "Scheduled") {
                      $color = "btn-warning";
                      $error = "";
                      $errorTick = "disabled";
                    } else if ($status == "Confirmed") {
                      $color = "btn-success";
                      $error = "";
                      $errorTick = "";
                      $target = "complete";
                    } else if ($status == "Cancelled") {
                      $color = "btn-danger";
                      $error = "disabled";
                      $errorTick = "";
                    } else if ($status == "Completed") {
                      $color = "btn-primary";
                      $error = "disabled";
                      $errorTick = "";
                    }

                    if ($date < $currentDate) {
                      if ($status != "Completed") {
                        $status = "Cancelled";
                        $color = "btn-danger";
                        $error = "disabled";
                        $errorTick = "";
                      }
                    }
                  ?>
                    <tr>
                      <td><?php echo $aprefix . "" . $aid; ?></td>
                      <td class="d-none"><?php echo $id ?></td>
                      <?php if ($currentUserPosition == "Staff") {
                        echo "<td>" . $sprefix . "" . $sid . " - " . $sname . "</td>";
                      } ?>
                      <td><?php echo $uprefix . "" . $uid . " - " . $uname; ?></td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $time; ?></td>
                      <td>
                        <button type="button" class="btn <?php echo $color; ?>">
                          <?php echo $status; ?>
                        </button>
                      </td>
                      <td class="action-button">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewData<?php echo $aid; ?>">
                          <i class=" fas fa-eye"></i></button>
                        <?php if ($currentUserPosition == "Doctor") { ?>
                          <button type="button" <?php echo $error . "" . $errorTick; ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#<?php echo $target ?><?php echo $aid; ?>">
                            <i class="fas fa-check"></i></button>
                        <?php } ?>
                        <button type="button" <?php echo $error ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#schedule<?php echo $aid; ?>">
                          <i class="fas fa-edit"></i></button>
                        <button type="button" <?php echo $error ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#cancel<?php echo $aid; ?>">
                          <i class="fas fa-times"></i></i></button>
                      </td>
                    </tr>
                    <!-- View Modal -->
                    <div class="modal fade" id="viewData<?php echo $aid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="viewDataLabel">View Appointment Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3">
                              <input type="hidden" name="viewID" value="<?php echo $aid; ?>">
                              <label class="form-label">Appointment ID</label>
                              <input type="text" class="form-control" value="<?php echo $aprefix . "" . $aid; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">User ID</label>
                              <input type="text" class="form-control" value="<?php echo $uprefix . "" . $uid; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">User Name</label>
                              <input type="text" class="form-control" value="<?php echo $uname; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Appointment Date</label>
                              <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Appointment Time</label>
                              <input type="text" class="form-control" value="<?php echo $time; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Medical Concern/Reason</label>
                              <input type="text" class="form-control" value="<?php echo $reason; ?>" readonly>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Accept Modal -->
                    <div class="modal fade" id="accept<?php echo $aid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="acceptDataLabel">Appointment Confirmation Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="acceptID" value="<?php echo $aid; ?>">
                              </div>
                              <div class="mb-3">
                                <h6>Would you like to confirm the appointment stated below?</h6>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment ID</label>
                                <input type="text" class="form-control" value="<?php echo $aprefix . "" . $aid; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment Date</label>
                                <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment Time</label>
                                <input type="text" class="form-control" value="<?php echo $time; ?>" readonly>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="confirmBtn">Yes</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Complete Modal -->
                    <div class="modal fade" id="complete<?php echo $aid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="acceptDataLabel">Appointment Complete Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="completeID" value="<?php echo $aid; ?>">
                              </div>
                              <div class="mb-3">
                                <h6>Would you like to conclude the appointment stated below?</h6>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment ID</label>
                                <input type="text" class="form-control" value="<?php echo $aprefix . "" . $aid; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment Date</label>
                                <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment Time</label>
                                <input type="text" class="form-control" value="<?php echo $time; ?>" readonly>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="completeBtn">Yes</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Cancelled Modal -->
                    <div class="modal fade" id="cancel<?php echo $aid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="cancelDataLabel">Appointment Cancellation Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="cancelID" value="<?php echo $aid; ?>">
                              </div>
                              <div class="mb-3">
                                <h6>Would you like to cancel the appointment stated below?</h6>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment ID</label>
                                <input type="text" class="form-control" value="<?php echo $aprefix . "" . $aid; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment Date</label>
                                <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment Time</label>
                                <input type="text" class="form-control" value="<?php echo $time; ?>" readonly>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="cancelBtn">Yes</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Schedule Modal -->
                    <div class="modal fade" id="schedule<?php echo $aid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editData">Edit Appointment Arrangement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="editID" value="<?php echo $aid; ?>">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Appointment ID</label>
                                <input type="text" class="form-control" value="<?php echo $aprefix . "" . $aid; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <?php
                                $userSql = "SELECT * FROM `user`";
                                $user = mysqli_query($data, $userSql);
                                ?>
                                <label for="editName" class="form-label">Patient Detail</label>
                                <input type="text" class="form-control" value="<?php echo $uprefix . "" . $uid . " - " . $uname; ?>" readonly>
                                </select>
                              </div>
                              <?php if ($currentUserPosition == "Staff") { ?>
                                <div class="mb-3">
                                  <?php
                                  $staffSql = "SELECT * FROM `staff`";
                                  $staff = mysqli_query($data, $staffSql);
                                  ?>
                                  <label for="editStaffId" class="form-label">Doctor Assigned</label>
                                  <select id="editStaffId" class="form-control select2me" name="editStaffId">
                                    <option value="" disabled selected>Select Doctor Assigned</option>
                                    <?php while ($fetch = mysqli_fetch_array($staff)) :; ?>
                                      <?php $sid = $fetch['staffId'];
                                      $prefix = $fetch['staffPrefix'];
                                      $staffName = $fetch['staffName'];
                                      $sposition = $fetch['staffPosition'];
                                      if ($sposition == "Doctor") {  ?>
                                        <option value="<?php echo $sid; ?>" <?php if ($sname == "$staffName") echo "selected"; ?>><?php echo $prefix . "" . $sid . " - " . $staffName; ?></option>
                                    <?php }
                                    endwhile; ?>
                                  </select>
                                </div>
                              <?php } ?>
                              <div class="mb-3">
                                <label class="form-label">Appointment Date</label>
                                <input type="date" name="editDate" id="editDate" class="form-control" value="<?php echo $date; ?>" min="<?php echo date("Y-m-d"); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="editTime" class="form-label">Select Appointment Time</label>
                                <select id="editTime" class="form-select" name="editTime" required>
                                  <option value="9:00" <?php if ($time == "9:00:00") echo "selected"; ?>>9:00 a.m.</option>
                                  <option value="10:00" <?php if ($time == "10:00:00") echo "selected"; ?>>10:00 a.m.</option>
                                  <option value="11:00" <?php if ($time == "11:00:00") echo "selected"; ?>>11:00 a.m.</option>
                                  <option value="12:00" <?php if ($time == "12:00:00") echo "selected"; ?>>12:00 p.m.</option>
                                  <option value="13:00" <?php if ($time == "13:00:00") echo "selected"; ?>>1:00 p.m.</option>
                                  <option value="14:00" <?php if ($time == "14:00:00") echo "selected"; ?>>2:00 p.m.</option>
                                  <option value="15:00" <?php if ($time == "15:00:00") echo "selected"; ?>>3:00 p.m.</option>
                                  <option value="16:00" <?php if ($time == "16:00:00") echo "selected"; ?>>4:00 p.m.</option>
                                  <option value="17:00" <?php if ($time == "17:00:00") echo "selected"; ?>>5:00 p.m.</option>
                                  <option value="18:00" <?php if ($time == "18:00:00") echo "selected"; ?>>6:00 p.m.</option>
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
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Form -->
  <!-- Add Appointment -->
  <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addData">Add Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <?php if ($currentUserPosition == "Staff") { ?>
              <div class="mb-3">
                <?php
                $staffSql = "SELECT * FROM `staff`";
                $staff = mysqli_query($data, $staffSql);
                ?>
                <label for="inputStaffId" class="form-label">Doctor Assigned</label>
                <select id="inputStaffId" class="form-control select2me" name="inputStaffId">
                  <option value="" disabled selected>Select Doctor Assigned</option>
                  <?php while ($fetch = mysqli_fetch_array($staff)) :; ?>
                    <?php $sid = $fetch['staffId'];
                    $prefix = $fetch['staffPrefix'];
                    $staffName = $fetch['staffName'];
                    $sposition = $fetch['staffPosition'];
                    if ($sposition == "Doctor") {  ?>
                      <option value="<?php echo $sid; ?>"><?php echo $prefix . "" . $sid . " - " . $staffName; ?></option>
                  <?php }
                  endwhile; ?>
                </select>
              </div>
            <?php } ?>
            <div class="mb-3">
              <?php
              $userSql = "SELECT * FROM `user`";
              $user = mysqli_query($data, $userSql); ?>
              <label for="inputDataName" class="form-label">Patient Name</label>
              <select id="inputDataName" required class="form-select select2me" name="inputDataName" title="Select User" data-live-search="true">
                <option value="" disabled selected>Select Patient</option>
                <?php while ($fetch = mysqli_fetch_array($user)) :; ?>
                  <?php $id = $fetch['userId'];
                  $prefix = $fetch['userPrefix'];
                  $name = $fetch['userName']; ?>
                  <option value="<?php echo $id; ?>"><?php echo $prefix . "" . $id . " - " . $name; ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <div class="mb-3">
              <div class="form-group">
                <label for="inputDate">Select Appointment Date</label>
                <input class="form-control" required id="inputDate" type="date" name="inputDate" min="<?php echo date("Y-m-d"); ?>" required />
              </div>
            </div>
            <div class="mb-3">
              <label for="inputTime" class="form-label">Select Appointment Time</label>
              <select id="inputTime" class="form-select" name="inputTime" required>
                <option value="9:00">9:00 a.m.</option>
                <option value="10:00">10:00 a.m.</option>
                <option value="11:00">11:00 a.m.</option>
                <option value="12:00">12:00 p.m.</option>
                <option value="13:00">1:00 p.m.</option>
                <option value="14:00">2:00 p.m.</option>
                <option value="15:00">3:00 p.m.</option>
                <option value="16:00">4:00 p.m.</option>
                <option value="17:00">5:00 p.m.</option>
                <option value="18:00">6:00 p.m.</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="inputNote" class="form-label">Note</label>
              <input type="text" class="form-control" name="inputNote">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" name="addBtn">Add Appointment</button>
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
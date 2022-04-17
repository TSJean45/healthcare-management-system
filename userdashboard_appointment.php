<?php
session_start();

include 'connection.php';

?>

<!DoCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="asset/css/userstyle.css?v=<?php echo time(); ?>">
  <?php include('asset/includes/cssCDN.php'); ?>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
  <title>My Consultation Appointment</title>
</head>

<body>

  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

  <section class="container">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            My Consultation Appointment
          </h4>
          <p>
            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Instruction
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <p class="card-text">
                <button type="button" class="btn btn-light" data-bs-toggle="modal">
                  <i class="fas fa-check"></i><span>Accepts Appointment</span></button>
                <button type="button" class="btn btn-light" data-bs-toggle="modal">
                  <i class="fas fa-edit"></i><span>Request Appointment Postponement</span></button>
                <button type="button" class="btn btn-light" data-bs-toggle="modal">
                  <i class="fas fa-close"></i><span>Cancel Appointment</span></button>
              </p>
              <p class="card-text">
                <button type="button" class="btn btn-secondary">
                  Booked
                </button>
                <span>Succesfully submit appointment request. Awaiting status from the medical staff.</span>
              </p>
              <p class="card-text">
                <button type="button" class="btn btn-warning">
                  Scheduled
                </button>
                <span>Receive appointment schedule from medical staff. Accepts appointment arrangement if necessary.</span>
              </p>
              <p class="card-text">
                <button type="button" class="btn btn-success">
                  Confirmed
                </button>
                <span>Confirmed appointment arrangement. Please attend to the appointment on time.</span>
              </p>
              <p class="card-text">
                <button type="button" class="btn btn-danger">
                  Cancelled
                </button>
                <span>Appointment is cancelled. Do arrange a new appointment if necessary.</span>
              </p>
              <p class="card-text">
                <button type="button" class="btn btn-primary">
                  Completed
                </button>
                <span>Appointment arrangement is completed.</span>
              </p>
            </div>
          </div>
          <?php
          if (isset($_POST["confirmBtn"])) {
            $id = $_POST["acceptID"];
            $status = "Confirmed";

            $editSql = "UPDATE `appointment` SET `appointmentStatus`='$status' WHERE `appointmentID`='$id'";
            $result = mysqli_query($data, $editSql);

            if ($result) {
              echo '<div class="alert alert-success" role="alert">
                Appointment successfully confirmed. 
            </div>';
            } else {
              echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not confirmed. Please try again later.
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
                Appointment successfully cancelled. Cancellation status has sent to the staff. 
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
            $staffId = $_POST["editStaffId"];
            $status = "Booked";

            $editSql = "UPDATE `appointment` SET `appointmentDate`='$date',`appointmentTime`='$time',`appointmentStatus`='$status',`staffId`='$staffId' WHERE `appointmentID`='$id'";
            $result = mysqli_query($data, $editSql);

            if ($result) {
              echo '<div class="alert alert-success" role="alert">
                Appointment successfully rebooked. Please wait for an update on your appointment status. 
            </div>';
            } else {
              echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not rebooked. Please try again later.
                </div>';
            }
          }
          ?>
          <div class="table-responsive">
            <table class="table table-hover table-bordered table-condensed" id="dataTableID" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Appointment ID</th>
                  <th scope="col">Appointment Date</th>
                  <th scope="col">Appointment Time</th>
                  <th scope="col">Preferred Doctor</th>
                  <th scope="col">Appointment Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $viewSql = "SELECT * FROM `appointment` INNER JOIN `staff`  ON  appointment.staffId=staff.staffId";
                $result = mysqli_query($data, $viewSql);
                while ($fetch = mysqli_fetch_array($result)) {
                  $aprefix = $fetch['appointmentPrefix'];
                  $aid = $fetch['appointmentID'];
                  $date = $fetch['appointmentDate'];
                  $time = $fetch['appointmentTime'];
                  $status = $fetch['appointmentStatus'];
                  $sname = $fetch['staffName'];
                  $currentDate = date("Y-m-d");

                  if ($status == "Booked") {
                    $color = "btn-secondary";
                    $error = "";
                    $tick = "disabled";
                  } else if ($status == "Scheduled") {
                    $color = "btn-warning";
                    $error = "";
                    $tick = "";
                  } else if ($status == "Confirmed") {
                    $color = "btn-success";
                    $error = "";
                    $tick = "";
                    $tick = "disabled";
                  } else if ($status == "Cancelled") {
                    $color = "btn-danger";
                    $error = "disabled";
                    $tick = "";
                  } else if ($status == "Completed") {
                    $color = "btn-primary";
                    $error = "disabled";
                    $tick = "";
                  }

                  if ($date < $currentDate) {
                    if ($status != "Completed") {
                      $status = "Cancelled";
                      $color = "btn-danger";
                      $error = "disabled";
                      $tick = "";
                    }
                  }
                ?>
                  <tr>
                    <td><?php echo $aprefix . "" . $aid; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
                    <td>Doctor <?php echo $sname; ?></td>
                    <td>
                      <button type="button" class="btn <?php echo $color; ?>">
                        <?php echo $status; ?>
                      </button>
                    </td>
                    <td class="action-button">
                      <button type="button" <?php echo $error ?><?php echo $tick ?> class="btn btn-light" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#accept<?php echo $aid; ?>">
                        <i class="fas fa-check"></i></button>
                      <button type="button" <?php echo $error ?> class="btn btn-light" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#schedule<?php echo $aid; ?>">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" <?php echo $error ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#cancel<?php echo $aid; ?>">
                        <i class="fas fa-close"></i></i></button>
                    </td>
                  </tr>
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
                              <label class="form-label">Preferred Doctor</label>
                              <input type="text" class="form-control" value="Doctor <?php echo $sname; ?>" readonly>
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
                              $staffSql = "SELECT * FROM `staff` ORDER BY `staffDepartment` ASC";
                              $staff = mysqli_query($data, $staffSql); ?>
                              <label class="form-label">Preferred Doctor</label>
                              <select id="editStaffId" class="form-select select2" name="editStaffId" required>
                                <?php while ($fetch = mysqli_fetch_array($staff)) :; ?>
                                  <?php $sid = $fetch['staffId'];
                                  $suserName = $fetch['staffName'];
                                  $sposition = $fetch['staffPosition'];
                                  $sdepartment = $fetch['staffDepartment'];
                                  if ($sposition == "Doctor") {  ?>
                                    <option value="<?php echo $sid; ?>" <?php if ($sname == "$suserName") echo "selected"; ?>><?php echo "Doctor " . $suserName . " - " . $sdepartment ?></option>
                                <?php }
                                endwhile; ?>
                              </select>
                            </div>
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
                              <label class="form-label">Preferred Doctor</label>
                              <input type="text" class="form-control" value="<?php echo "Doctor" . $sname; ?>" readonly>
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
                <?php  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--Footer -->
  <?php include('asset/includes/footer.php'); ?>
  <?php include('asset/includes/jsCDN.php'); ?>
</body>

</html>
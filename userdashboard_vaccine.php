<?php
session_start();

include 'connection.php';

if(!isset($_SESSION['userName']))
{
  header( "refresh:0;url=index.php#login-again-to-get-access" );
}

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="asset/css/userstyle.css?v=<?php echo time(); ?>">
  <?php include('asset/includes/cssCDN.php'); ?>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
  <title>My Vaccination Appointment</title>
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
            My Vaccination Appointment
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
                  <i class="fas fa-edit"></i><span>Edit Vaccine</span></button>
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

          if (isset($_POST["cancelBtn"])) {
            $id = $_POST["cancelID"];
            $status = "Cancelled";

            $editSql = "UPDATE `vaccine` SET `vaccineStatus`='$status' WHERE `vaccineId`='$id'";
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
            $brand = $_POST["editVaccine"];
            $status = "Booked";

            $editSql = "UPDATE `vaccine` SET `vaccineBrand`='$brand' WHERE `vaccineId`='$id'";
            $result = mysqli_query($data, $editSql);

            if ($result) {
              echo '<div class="alert alert-success" role="alert">
                Vaccine successfully edited. Please wait for an update on your vaccination appointment status. 
            </div>';
            } else {
              echo '<div class="alert alert-danger" role="alert">
                    Error! Vaccine is not edited. Please try again later.
                </div>';
            }
          }

          if (isset($_POST["confirmBtn"])) {
            $id = $_POST["acceptID"];
            $status = "Confirmed";

            $editSql = "UPDATE `vaccine` SET `vaccineStatus`='$status' WHERE `vaccineId`='$id'";
            $result = mysqli_query($data, $editSql);

            if ($result) {
              echo '<div class="alert alert-success" role="alert">
                Vaccination appointment successfully confirmed. 
            </div>';
            } else {
              echo '<div class="alert alert-danger" role="alert">
                    Error! Vaccination ppointment is not confirmed. Please try again later.
                </div>';
            }
          }
          ?>
          <div class="table-responsive">
            <table class="table table-hover table-bordered table-condensed" id="dataTableID" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Vaccination ID</th>
                  <th scope="col">Vaccine</th>
                  <th scope="col">Vaccination Date</th>
                  <th scope="col">Vaccination Time</th>
                  <th scope="col">Vaccination Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $viewSql = "SELECT * FROM `vaccine` INNER JOIN `user`  ON  vaccine.userId=user.userId";
                $result = mysqli_query($data, $viewSql);
                while ($fetch = mysqli_fetch_array($result)) {
                  $vprefix = $fetch['vaccinePrefix'];
                  $vid = $fetch['vaccineId'];
                  $date = $fetch['vaccineDate'];
                  $time = $fetch['vaccineTime'];
                  $status = $fetch['vaccineStatus'];
                  $brand = $fetch['vaccineBrand'];
                  $currentDate = date("Y-m-d");

                  if ($date == "0000-00-00" && $time == "00:00:00") {
                    $date = "N/A";
                    $time = "N/A";
                  }

                  if ($status == "Booked") {
                    $color = "btn-secondary";
                    $error = "";
                    $edit = "";
                    $tick = "disabled";
                  } else if ($status == "Scheduled") {
                    $color = "btn-warning";
                    $error = "";
                    $edit = "disabled";
                    $tick = "";
                  } else if ($status == "Confirmed") {
                    $color = "btn-success";
                    $error = "";
                    $edit = "disabled";
                    $tick = "";
                    $tick = "disabled";
                  } else if ($status == "Cancelled") {
                    $color = "btn-danger";
                    $error = "disabled";
                    $edit = "";
                    $tick = "";
                  } else if ($status == "Completed") {
                    $color = "btn-primary";
                    $error = "disabled";
                    $edit = "";
                    $tick = "";
                  }
                ?>
                  <tr>
                    <td><?php echo $vprefix . "" . $vid; ?></td>
                    <td><?php echo $brand; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
                    <td>
                      <button type="button" class="btn <?php echo $color; ?>">
                        <?php echo $status; ?>
                      </button>
                    </td>
                    <td class="action-button">
                      <button type="button" <?php echo $error ?><?php echo $tick ?> class="btn btn-light" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#accept<?php echo $vid; ?>">
                        <i class="fas fa-check"></i></button>
                      <button type="button" <?php echo $error ?><?php echo $edit ?> class="btn btn-light" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#edit<?php echo $vid; ?>">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" <?php echo $error ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#cancel<?php echo $vid; ?>">
                        <i class="fas fa-close"></i></i></button>
                    </td>
                  </tr>
                  <!-- Accept Modal -->
                  <div class="modal fade" id="accept<?php echo $vid; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="acceptDataLabel">Vaccination Confirmation Message</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="POST">
                            <div class="mb-3">
                              <input type="hidden" name="acceptID" value="<?php echo $vid; ?>">
                            </div>
                            <div class="mb-3">
                              <h6>Would you like to confirm the vaccination appointment stated below?</h6>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination ID</label>
                              <input type="text" class="form-control" value="<?php echo $vprefix . "" . $vid; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccine</label>
                              <input type="text" class="form-control" value="<?php echo $brand; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination Date</label>
                              <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination Time</label>
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
                  <!-- Edit Modal -->
                  <div class="modal fade" id="edit<?php echo $vid; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editData">Edit Vaccine</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="POST">
                            <div class="mb-3">
                              <input type="hidden" name="editID" value="<?php echo $vid; ?>">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination ID</label>
                              <input type="text" class="form-control" value="<?php echo $vprefix . "" . $vid; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination Date</label>
                              <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination Time</label>
                              <input type="text" class="form-control" value="<?php echo $time; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label for="editVaccine" class="form-label">Select Vaccine</label>
                              <select id="editVaccine" class="form-select" name="editVaccine" required>
                                <option value="Pfizer" <?php if ($brand == "Pfizer") echo "selected"; ?>>Pfizer</option>
                                <option value="AstraZeneca" <?php if ($brand == "AstraZeneca") echo "selected"; ?>>AstraZeneca</option>
                                <option value="Sinovac" <?php if ($brand == "Sinovac") echo "selected"; ?>>Sinovac</option>
                                <option value="Moderna" <?php if ($brand == "Moderna") echo "selected"; ?>>Moderna</option>
                                <option value="Johnson and Johnson" <?php if ($brand == "Johnson and Johnson") echo "selected"; ?>>Johnson and Johnson</option>
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
                  <div class="modal fade" id="cancel<?php echo $vid; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="cancelDataLabel">Vaccination Cancellation Message</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="POST">
                            <div class="mb-3">
                              <input type="hidden" name="cancelID" value="<?php echo $vid; ?>">
                            </div>
                            <div class="mb-3">
                              <h6>Would you like to cancel the vaccination appointment stated below?</h6>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination ID</label>
                              <input type="text" class="form-control" value="<?php echo $vprefix . "" . $vid; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccine</label>
                              <input type="text" class="form-control" value="<?php echo $brand; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination Date</label>
                              <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Vaccination Time</label>
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
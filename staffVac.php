<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Vaccination</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'staffVac';
  include('asset/includes/staffSideBar.php'); ?>


  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Vaccination</span>
      </div>
      <div class="right-nav">
        <div class="profile dropdown">
          <div>
            <?php
            $currentUser = $_SESSION['staffId'];
            $sql = "SELECT * FROM staff WHERE staffId ='$currentUser'";

            $result = mysqli_query($data, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $prefix = $row['staffPrefix'];
                $id = $row['staffId'];
                $imageStatus = $row['staffImage_status'];

                if ($imageStatus == 1) {
                  echo "<img src='upload/profile" . $prefix . $id . ".jpg'>";
                } else {
                  echo "<img src='asset/image/short-emp.jpg'>";
                }
              }
            }
            ?>
            <?php

            $currentUser = $_SESSION['staffId'];
            $sql = "SELECT * FROM staff WHERE staffId ='$currentUser'";

            $result = mysqli_query($data, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $staffName = $row['staffName'];

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
                <h4 class="card-title">Vaccination Details</h4>
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
              $brand = $_POST['inputVaccine'];
              $status = "Scheduled";

              $addSql = "INSERT INTO `vaccine` (`vaccineDate`,`vaccineTime`,`vaccineBrand`,`vaccineStatus`,`userId`) 
              VALUES ('$date','$time','$brand','$status','$uid')";
              $result = mysqli_query($data, $addSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                Appointment successfully added. Scheduled status has sent to the patient.</div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Appointment is not added. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["confirmBtn"])) {
              $id = $_POST["acceptID"];
              $date = $_POST["inputDate"];
              $time = $_POST["inputTime"];
              $status = "Scheduled";

              $editSql = "UPDATE `vaccine` SET `vaccineStatus`='$status',`vaccineTime`='$time',`vaccineDate`='$date' WHERE `vaccineId`='$id'";
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

              $editSql = "UPDATE `vaccine` SET `vaccineStatus`='$status' WHERE `vaccineId`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                Vaccination successfully completed. 
            </div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Vaccination is not completed. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["cancelBtn"])) {
              $id = $_POST["cancelID"];
              $status = "Cancelled";

              $editSql = "UPDATE `vaccine` SET `vaccineStatus`='$status' WHERE `vaccineId`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                Vaccination successfully cancelled. Cancellation status has sent to the patient. 
            </div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Vaccination is not cancelled. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["editBtn"])) {
              $id = $_POST["editID"];
              $date = $_POST["editDate"];
              $time = $_POST["editTime"];
              $brand = $_POST["editVaccine"];
              $status = "Scheduled";

              $editSql = "UPDATE `vaccine` SET `vaccineDate`='$date',`vaccineTime`='$time',`vaccineStatus`='$status',`vaccineBrand`='$brand' WHERE `vaccineId`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    Vaccination appointment successfully edited. Scheduled status has sent to patient.
                </div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Vaccination appointment is not edited. Please try again later.
                </div>';
              }
            }
            ?>
            <div class="table-responsive">
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <th>Vaccination ID</th>
                    <th class="d-none">ID</th>
                    <th>Patient Detail</th>
                    <th>Vaccine</th>
                    <th>Vaccination Date</th>
                    <th>Vaccination Time</th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $viewSql = "SELECT * FROM `vaccine` INNER JOIN  `user` ON  vaccine.userId = user.userId";
                  $result = mysqli_query($data, $viewSql);
                  while ($fetch = mysqli_fetch_array($result)) {
                    $vprefix = $fetch['vaccinePrefix'];
                    $vid = $fetch['vaccineId'];
                    $date = $fetch['vaccineDate'];
                    $time = $fetch['vaccineTime'];
                    $status = $fetch['vaccineStatus'];
                    $brand = $fetch['vaccineBrand'];
                    $uid = $fetch['userId'];
                    $uprefix = $fetch['userPrefix'];
                    $uname = $fetch['userName'];
                    $currentDate = date("Y-m-d");

                    if ($date == "0000-00-00" && $time == "00:00:00") {
                      $date = "N/A";
                      $time = "N/A";
                    }

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
                  ?>
                    <tr>
                      <td><?php echo $vprefix . "" . $vid ?></td>
                      <td><?php echo $uprefix . "" . $uid . " - " . $uname; ?></td>
                      <td><?php echo $brand ?></td>
                      <td><?php echo $date ?></td>
                      <td><?php echo $time ?></td>
                      <td>
                        <button type="button" class="btn <?php echo $color; ?>">
                          <?php echo $status; ?>
                        </button>
                      </td>
                      <td class="action-button">
                        <button type="button" <?php echo $error . "" . $errorTick; ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#<?php echo $target ?><?php echo $vid; ?>">
                          <i class="fas fa-check"></i></button>
                        <button type="button" <?php echo $error ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#schedule<?php echo $vid; ?>">
                          <i class="fas fa-edit"></i></button>
                        <button type="button" <?php echo $error ?> class="btn btn-light" data-bs-toggle="modal" data-bs-target="#cancel<?php echo $vid; ?>">
                          <i class="fas fa-times"></i></i></button>
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
                                <h6>Would you like to confirm the vaccination date and time stated below?</h6>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Vaccination ID</label>
                                <input type="text" class="form-control" value="<?php echo $vprefix . "" . $vid; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <?php
                                $userSql = "SELECT * FROM `user`";
                                $user = mysqli_query($data, $userSql);
                                ?>
                                <label class="form-label">Patient Detail</label>
                                <input type="text" class="form-control" value="<?php echo $uprefix . "" . $uid . " - " . $uname; ?>" readonly>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Vaccination Date</label>
                                <input type="date" name="inputDate" id="inputDate" class="form-control" min="<?php echo date("Y-m-d"); ?>" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Vaccination Time</label>
                                <input type="time" name="inputTime" id="inputTime" class="form-control" required min="09:00" max="18:00">
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
                                <h6>Would you like to cancel the appointment stated below?</h6>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Vaccination ID</label>
                                <input type="text" class="form-control" value="<?php echo $vprefix . "" . $vid; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <?php
                                $userSql = "SELECT * FROM `user`";
                                $user = mysqli_query($data, $userSql);
                                ?>
                                <label class="form-label">Patient Detail</label>
                                <input type="text" class="form-control" value="<?php echo $uprefix . "" . $uid . " - " . $uname; ?>" readonly>
                                </select>
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
                    <!-- Complete Modal -->
                    <div class="modal fade" id="complete<?php echo $vid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="acceptDataLabel">Vaccination Complete Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="completeID" value="<?php echo $vid; ?>">
                              </div>
                              <div class="mb-3">
                                <h6>Would you like to conclude the appointment stated below?</h6>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Vaccination ID</label>
                                <input type="text" class="form-control" value="<?php echo $vprefix . "" . $vid; ?>" readonly>
                              </div>
                              <div class="mb-3">
                                <?php
                                $userSql = "SELECT * FROM `user`";
                                $user = mysqli_query($data, $userSql);
                                ?>
                                <label class="form-label">Patient Detail</label>
                                <input type="text" class="form-control" value="<?php echo $uprefix . "" . $uid . " - " . $uname; ?>" readonly>
                                </select>
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
                                <button type="submit" class="btn btn-success" name="completeBtn">Yes</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Schedule Modal -->
                    <div class="modal fade" id="schedule<?php echo $vid; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editData">Edit Vaccination Arrangement</h5>
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
                                <?php
                                $userSql = "SELECT * FROM `user`";
                                $user = mysqli_query($data, $userSql);
                                ?>
                                <label for="editName" class="form-label">Patient Detail</label>
                                <input type="text" class="form-control" value="<?php echo $uprefix . "" . $uid . " - " . $uname; ?>" readonly>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Vaccination Date</label>
                                <input type="date" name="editDate" id="editDate" class="form-control" value="<?php echo $date; ?>" min="<?php echo date("Y-m-d"); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="editTime" class="form-label">Vaccination Time</label>
                                <input type="time" name="editTime" id="editTime" value="<?php echo $time ?>" class="form-control" required min="09:00" max="18:00">
                              </div>
                              <div class="mb-3">
                                <select class="form-select" id="editVaccine" name="editVaccine" required>
                                  <option value="" disabled selected>Select Vaccine</option>
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
          <h5 class="modal-title" id="addData">Add Vaccination Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
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
              <label class="form-label">Vaccination Time</label>
              <input type="time" name="inputTime" id="inputTime" class="form-control" required min="09:00" max="18:00">
            </div>
            <div class="mb-3">
              <select class="form-select" id="inputVaccine" name="inputVaccine" required>
                <option value="" disabled selected>Select Vaccine</option>
                <option value="Pfizer">Pfizer</option>
                <option value="AstraZeneca">AstraZeneca</option>
                <option value="Sinovac">Sinovac</option>
                <option value="Moderna">Moderna</option>
                <option value="Johnson and Johnson">Johnson and Johnson</option>
              </select>
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
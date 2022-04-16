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
  <title>User Appointment</title>
</head>

<body>

  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

  <div class="container">
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
                  $prefix = $fetch['appointmentPrefix'];
                  $id = $fetch['appointmentID'];
                  $date = $fetch['appointmentDate'];
                  $time = $fetch['appointmentTime'];
                  $status = $fetch['appointmentStatus'];
                  $sname = $fetch['staffName'];

                  if ($status == "Booked") {
                    $color = "btn-secondary";
                  } else if ($status == "Scheduled") {
                    $color = "btn-warning";
                  } else if ($status == "Confirmed") {
                    $color = "btn-success";
                  } else if ($status == "Cancelled") {
                    $color = "btn-danger";
                  } else if ($status == "Completed") {
                    $color = "btn-primary";
                  }
                ?>
                  <tr>
                    <td><?php echo $prefix . "" . $id; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
                    <td>Doctor <?php echo $sname; ?></td>
                    <td>
                      <button type="button" class="btn <?php echo $color; ?>">
                        <?php echo $status; ?>
                      </button>
                    </td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal">
                        <i class="fas fa-check"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal">
                        <i class="fas fa-close"></i></i></button>
                    </td>
                  </tr>
                <?php  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Footer -->
  <?php include('asset/includes/footer.php'); ?>
  <?php include('asset/includes/jsCDN.php'); ?>
</body>

</html>
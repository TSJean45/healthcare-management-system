<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Vaccination Appointment</title>

  <link rel="stylesheet" href="asset/css/header.css">
  <link rel="stylesheet" href="asset/css/footer.css">
  <link rel="stylesheet" href="asset/css/appointment.css">
  <?php include('asset/includes/cssCDN.php'); ?>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
  <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
  <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
</head>

<?php
session_start();
include 'connection.php';
?>

<body>

  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

  <div class="container">
    <div class="card mb-3">
      <img class="card-img-top" src="asset/image/vac.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">
          <h2 class="mb-2 title-color text-center">Book A Vaccination Appoinment</h2>
        </h5>
        <p class="card-text">
        <p class="mb-4 text-center">
          Now you can get an online vaccine appointment with no hassle. Please check on your appointment dashboard for a confirmed appointment.
        </p>
        </p>
        <?php
        if (isset($_POST["addBtn"])) {
          $brand = $_POST["inputVaccine"];
          $userId =  $_SESSION['userId'];
          $status = "Booked";

          $addSql = "INSERT INTO `vaccine` (`vaccineBrand`,`userId`,`vaccineStatus`) 
                                VALUES ('$brand','$userId','$status')";
          $result = mysqli_query($data, $addSql);

          if ($result) {
            echo '<div class="alert alert-success" role="alert">
                        You have successfully request for a vaccination appointment. Please check "My Vaccination Appointment" for your appointment status.
                    </div>';
          } else {
            echo '<div class="alert alert-danger" role="alert">
            Error! Fail to book a vaccination appointment. Please try again later.
                        </div>';
          }
        }
        ?>
        <p class="card-text">
        <form action="" method="post">
          <div class="row">
            <div class="col-lg-12 my-1">
              <div class="form-group">
                <select class="form-select" id="inputVaccine" name="inputVaccine" required>
                  <option value="" disabled selected>Select Vaccine</option>
                  <option value="Pfizer">Pfizer</option>
                  <option value="AstraZeneca">AstraZeneca</option>
                  <option value="Sinovac">Sinovac</option>
                  <option value="Moderna">Moderna</option>
                  <option value="Johnson and Johnson">Johnson and Johnson</option>
                </select>
              </div>
            </div>
            <div class="col-lg-12 my-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">
                  By submitting the form, I acknowledge that my information will be used and referred during the registration process.
                </label>
              </div>
            </div>
            <div class="col-lg-12 my-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">
                  By submitting the form, I acknowledge that the appointment made via online <b>DOES NOT</b> constitute to a <b>CONFIRMED</b> appointment.
                </label>
              </div>
            </div>
            <button type="submit" name="addBtn" class="btn btn-primary">Make An Appointment</button>
          </div>
        </form>
        </p>
      </div>
    </div>
  </div>

  <?php include('asset/includes/footer.php'); ?>
  <?php include('asset/includes/jsCDN.php'); ?>
</body>
</body>

</html>
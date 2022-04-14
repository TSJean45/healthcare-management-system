<?php
session_start();

include 'connection.php';

if (isset($_POST["addBtn"])) {
  $vacName = $_POST["inputVaccine"];
  $time = $_POST["inputTime"];
  $date = $_POST["inputDate"];
  $userId =  $_SESSION['userId'];

  $addSql = "INSERT INTO `vaccine` (`vaccineDate`,`vaccineTime`,`vaccineBrand`,`userId`) 
  VALUES ('$date','$time','$vacName','$userId')";
  $result = mysqli_query($data, $addSql);

  if ($result) {
    echo '<script> alert("Data added"); </script>';
  } else {
    echo '<script> alert("Data not added"); </script>';
  }
}

?>
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

<body>


  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->


  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="image"><img src="asset/image/vaccine.jpg" class="img-fluid" /></div>
      </div>

      <div class="col-lg-6 col-md-10">
        <div class="appoinment-wrap mt-5 mt-lg-0">
          <h2 class="mb-2 title-color text-center">Book Vaccination Appoinment</h2>
          <p class="mb-4 text-center">
            Now you can get an online vaccine appointment.
          </p>
          <form method="post" action="">
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
              <div class="col-lg-6 my-2">
                <div class="form-group">
                  <input class="form-control" id="inputDate" type="date" name="inputDate" min="<?php echo date("Y-m-d"); ?>" required />
                </div>
              </div>
              <div class="col-lg-6 my-2">
                <div class="form-group">
                  <input class="form-control" id="inputTime" type="time" min="09:00" max="19:00" name="inputTime" required />
                </div>
              </div>
              <button type="submit" class="btn btn-secondary" name="addBtn">Make Appointment</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include('asset/includes/footer.php'); ?>
  <?php include('asset/includes/jsCDN.php'); ?>

  <script type="text/javascript">
    (function() {
      window['__CF$cv$params'] = {
        r: '6d8dca5dd8382ecb',
        m: '3p8gevZYhksMtxWm.j4MrHWDhOyAIPKBYAVh.0rvXfI-1644081428-0-AaNzvH66B8kAoHnTGtJ05dmOUT0EUrMBZ5OuNK33LgNXaQbVfqgK1UfFSOhUXIjQEpqxnz1w7mBxv+OZBjqPV0xVMXTgh82jwYnyzXRZutVlPBaRTdTNQfcq1suN7lZ3dNzVVbkxNQIBKhPf8QqIiAyDvjneMtjLDMB+TY2uzd0u5CwiWTSuEtcTfpmNsDVC0fdSqw2rTee8gtc2QS5K2wA=',
        s: [0x2361d4a16a, 0xab3f01eb4a],
      }
    })();
  </script>
  <script type="text/javascript">
    (function() {
      window['__CF$cv$params'] = {
        r: '6d8dde29fee36b9e',
        m: 'pFWX1bjSc.e0PSq6Q5PFzNzVSbMUs8b4t72upSmD54A-1644082239-0-AW+W+Nuq82iRU8Tm6qIo+myHJXFFWWz2p4VDDOgRLn8qN+s1rbXlV+v6WnRUwNRgArB/cjAFBTAgL7UUFAMay0x8Ya2dLQj+2yf7oig1xe81A8do99CARiqVxQ04trvSfCmKP8ELKM+WzNcYXuO2/D4G8PgOH83gKqmtId46VKH5EVzSSVH1Hj5w/3x5Yh9xXJY8T7CsfeXGZh4LyUYKn1Y=',
        s: [0xeda9dea6c9, 0x045f352d27],
      }
    })();
  </script>
</body>
</body>

</html>
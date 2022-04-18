<?php
session_start();
include 'connection.php';
?>

<!doctype html>
<html>

<head>
  <!-- Local CSS File -->
  <?php include('asset/includes/cssCDN.php'); ?>

  <title>JJJ MedCare</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

  <!-- Scroll To Top Button -->
  <button onclick="topFunction()" id="topBtn" title="Go to top">
    <i class="fas fa-arrow-circle-up"></i>
  </button>

  <div class="containr">
    <div class="row heading">
      <div class="col-md-15 col-md-offset-3">
        <h2 class="text-center bottom-line " id=meet-staff>Meet Our Medical Staff</h2>
        <p class="subheading text-center"> Medicines cure diseases, but only doctors can cure patients. Check out our medical staff's qualification and contact details down below.</p>
      </div>
    </div>
  </div>

  <div class="container my-4">
    <div class="table-responsive">
      <table class="table table-borderless" id="dataTableID" style="width:100%">
        <thead>
          <tr>
            <th>Profile</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $viewSql = "SELECT * FROM `staff`";
          $result = mysqli_query($data, $viewSql);
          while ($fetch = mysqli_fetch_array($result)) {
            $spre = $fetch['staffPrefix'];
            $sid = $fetch['staffId'];
            $sname = $fetch['staffName'];
            $spos = $fetch['staffPosition'];
            $sdepart = $fetch['staffDepartment'];
            $semail = $fetch['staffEmail'];
            $snum = $fetch['staffPhone_number'];
            $squali = $fetch['staffQualification'];
            $imageStatus = $fetch['staffImage_status'];

          ?>
            <tr>
              <td>
                <div class="card mb-3">
                  <div class="row g-0">
                    <div class="col-md-3">
                      <?php if ($imageStatus == 1) {
                        echo "<img src='upload/profile" . $spre . $sid . ".jpg' height='300' width='300'>";
                      } else {
                        echo "<img src='asset/image/short-emp.jpg' height='300' width='300'>";
                      } ?> </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $sname ?></h5>
                        <p class="card-text">
                        <p>Position: <?php echo $spos ?></p>
                        <p>Department: <?php echo $sdepart ?></p>
                        <p>Email: <?php echo $semail ?></p>
                        <p>Phone Number: <?php echo $snum ?></p>
                        <p>Qualification: <?php echo $squali ?></p>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>

      </table>
    </div>
  </div>

  <!--Footer -->
  <?php include('asset/includes/footer.php'); ?>
  <!-- Local JS file -->
  <script src="asset/js/scrollTop.js"></script>
  <?php include('asset/includes/jsCDN.php'); ?>

</body>

</html>
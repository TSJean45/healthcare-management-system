<?php
session_start();
include 'connection.php'; ?>
<!DOCTYPE html>

<head>
  <?php include('asset/includes/cssCDN.php'); ?>

  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <title>Staff Dashboard</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'staffdashboard';
  include('asset/includes/staffSideBar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Main Dashboard</span>
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
  </section>

  <section class="home-section">
    <div class="home-content">
      <!-- Overview Boxes-->
      <div class="overview-boxes">
        <div class="container-fluid">
          <div class="row">
            <div class="row">
              <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                  <div class="card-body text-center">
                    <div class="row">
                      <div class="col-xl-5 col-sm-5 icon">
                        <i class='bx bxs-user one'></i>
                        <div class="indicator">
                          <i class='bx bxs-right-arrow-circle'></i>
                          <a href="staffUserlist.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $count = "SELECT * FROM `user`";
                        if ($result = mysqli_query($data, $count)) {
                          $userCount = mysqli_num_rows($result);
                        ?>
                          <h2 class="text-black mb-2 font-w600"><?php echo $userCount ?></h2>
                          <p class="mb-0 fs-13 box-topic">
                            Total Patients
                          </p>
                        <?php  } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                  <div class="card-body text-center">
                    <div class="row">
                      <div class="col-xl-5 col-sm-5 icon">
                        <i class="fas fa-syringe two"></i>
                        <div class="indicator second">
                          <i class='bx bxs-right-arrow-circle second'></i>
                          <a href="staffVac.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $cancel = "Cancelled";
                        $complete = "Completed";
                        $count = "SELECT * FROM `vaccine` WHERE `vaccineStatus`!='$cancel' AND `vaccineStatus`!='$complete'";
                        if ($result = mysqli_query($data, $count)) {
                          $vaccineCount = mysqli_num_rows($result);
                        ?>
                          <h2 class="text-black mb-2 font-w600"><?php echo $vaccineCount ?></h2>
                          <p class="mb-0 fs-13 box-topic">
                            Vaccination
                          </p>
                        <?php  } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                  <div class="card-body text-center">
                    <div class="row">
                      <div class="col-xl-5 col-sm-5 icon">
                        <i class='bx bxs-calendar three i'></i>
                        <div class="indicator">
                          <i class='bx bxs-right-arrow-circle third'></i>
                          <a href="staffApp.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $cancel = "Cancelled";
                        $complete = "Completed";
                        $count = "SELECT * FROM `appointment` WHERE `appointmentStatus`!='$cancel' AND `appointmentStatus`!='$complete'";
                        if ($result = mysqli_query($data, $count)) {
                          $appCount = mysqli_num_rows($result);
                        ?>
                          <h2 class="text-black mb-2 font-w600"><?php echo $appCount ?></h2>
                          <p class="mb-0 fs-13 box-topic">
                            Appointment
                          </p>
                        <?php  } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                  <div class="card-body text-center">
                    <div class="row">
                      <div class="col-xl-5 col-sm-5 icon">
                        <i class="fas fa-prescription-bottle-alt four"></i>
                        <div class="indicator ">
                          <i class='bx bxs-right-arrow-circle fourth'></i>
                          <a href="staffStock.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $currentDate = date("Y-m-d");
                        $count = "SELECT * FROM `medstock` WHERE `stockQty`<=200 AND `stockExpDate`>='$currentDate'";
                        if ($result = mysqli_query($data, $count)) {
                          $rowCount = mysqli_num_rows($result);
                        ?>
                          <h2 class="text-black mb-2 font-w600">
                            <?php echo $rowCount ?></h2>
                          <p class="mb-0 fs-13 box-topic">
                            Low In Stock
                          </p>
                        <?php  }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4" data-masonry='{"percentPosition": true }'>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Vaccination Appointment</h4>
                <div class="table-responsive">
                  <table class="table table-hover table-condensed">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Patient Detail</th>
                        <th>Vaccine</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $viewSql = "SELECT * FROM `vaccine`INNER JOIN  `user` ON  vaccine.userId = user.userId ORDER BY `vaccineId` DESC LIMIT 5";
                      $result = mysqli_query($data, $viewSql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $vpre = $row['vaccinePrefix'];
                        $vid = $row['vaccineId'];
                        $upre = $row['userPrefix'];
                        $uid = $row['userId'];
                        $uname = $row['userName'];
                        $brand = $row['vaccineBrand'];
                        $status = $row['vaccineStatus'];

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
                          <td><?php echo $vpre . "" . $vid; ?></td>
                          <td><?php echo $upre . "" . $uid . " - " . $uname; ?></td>
                          <td><?php echo $brand; ?></td>
                          <td>
                            <button type="button" class="btn <?php echo $color; ?>">
                              <?php echo $status; ?>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  <div class="d-flex flex-row-reverse">
                    <a href="staffStock.PHP">
                      <button type="button" class="btn btn-primary">See All</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card ">
              <div class="card-body">
                <h4 class="card-title">Patient List</h4>
                <table class="table table-hover table-condensed" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $viewSql = "SELECT * FROM `user` ORDER BY `userId` DESC LIMIT 5";
                    $result = mysqli_query($data, $viewSql);
                    while ($row = mysqli_fetch_assoc($result)) {
                      $uid = $row['userId'];
                      $uname = $row['userName'];
                      $uprefix = $row['userPrefix'];
                      $uemail = $row['userEmail'];
                    ?>
                      <tr>
                        <td><?php echo $uprefix . "" . $uid; ?></td>
                        <td><?php echo $uname; ?></td>
                        <td><?php echo $uemail; ?></td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
                <div class="d-flex flex-row-reverse">
                  <a href="adminUserlist.php">
                    <button type="button" class="btn btn-primary">See All</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Medicine Stock</h4>
                <div class="table-responsive">
                  <?php
                  $viewSql = "SELECT * FROM `medstock` ORDER BY `stockID` DESC LIMIT 5";
                  $result = mysqli_query($data, $viewSql);
                  ?>
                  <table class="table table-hover table-condensed">
                    <thead>
                      <tr>
                        <th> Stock ID </th>
                        <th> Stock Name </th>
                        <th> Stock Bar </th>
                        <th> Stock Amount </th>
                        <th>Stock Expiration Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          $prefix = $row['prefix'];
                          $id = $row['stockID'];
                          $name = $row['stockName'];
                          $qty = $row['stockQty'];
                          $expDate = $row['stockExpDate'];
                          $per = ($qty / 2000) * 100;

                          if ($per <= 10) {
                            $color = "bg-danger";
                          } else if ($per > 10 && $per <= 60) {
                            $color = "bg-warning";
                          } else if ($per > 75) {
                            $color = "bg-success";
                          }

                          if ($expDate < $currentDate) {
                            $warning = "fas fa-exclamation-triangle";
                            $expired = "error";
                          } else {
                            $warning = "";
                            $expired = "";
                          }
                      ?>
                          <tr>
                            <td><?php echo $prefix . "" . $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td>
                              <div class="progress" style="height: 20px;">
                                <div class="progress-bar progress-bar-striped <?php echo $color; ?>" role="progressbar" style="width: <?php echo $per; ?>%" aria-valuenow="<?php echo $per; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><?php echo $qty; ?></td>
                            <td class="expiration">
                              <?php echo $expDate; ?><i class="exp <?php echo $warning; ?>" style="color:rgba(150, 0, 0); margin-left: 10px;"></i></td>
                          </tr>
                      <?php  }
                      }
                      ?>
                    </tbody>
                  </table>
                  <div class="d-flex flex-row-reverse">
                    <a href="staffStock.PHP">
                      <button type="button" class="btn btn-primary">See All</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>

</body>

</html>
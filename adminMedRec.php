<?php
include 'connection.php'; ?>

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
  <?php $page = 'adminMedRec';
  include('asset/includes/adminSidebar.php'); ?>


  <section class="home-section">
    <!-- Top Bar-->
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
  </section>

  <section class="home-section ">
    <div class="home-content staffList">
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
                    <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#printVaccination">
                      Print
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
                  </tr>
                </thead>
                <tbody>
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
                      </tr>
                  <?php  }
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

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/triggerToast.js"></script>

</body>

</html>
<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="asset/css/navbar.css?v=<?php echo time(); ?>">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Admin Dashboard</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'admindashboard';
  include('asset/includes/adminSidebar.php'); ?>

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
            $currentUser = $_SESSION['adminId'];
            $sql = "SELECT * FROM admin WHERE adminId ='$currentUser'";

            $result = mysqli_query($data, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $prefix = $row['adminPrefix'];
                $id = $row['adminId'];
                $imageStatus = $row['adminImage_status'];

                if ($imageStatus == 1) {
                  echo "<img src='upload/profile" . $prefix . $id . ".jpg'>";
                } else {
                  echo "<img src='asset/image/short-emp.jpg'>";
                }
              }
            }
            ?>
            <?php

            $currentUser = $_SESSION['adminId'];
            $sql = "SELECT * FROM admin WHERE adminId ='$currentUser'";

            $result = mysqli_query($data, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $adminName = $row['adminName'];

            ?>

                <span class="profile_name"><?php echo $adminName ?></span>
            <?php  }
            } ?>
          </div>
        </div>
      </div>
      </div>
    </nav>

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
                        <i class='fa fa-user-cog three i'></i>
                        <div class="indicator">
                          <i class='bx bxs-right-arrow-circle third'></i>
                          <a href="adminlist.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $count = "SELECT * FROM `admin`";
                        if ($result = mysqli_query($data, $count)) {
                          $adminCount = mysqli_num_rows($result);
                        ?>
                          <h2 class="text-black mb-2 font-w600"><?php echo $adminCount ?></h2>
                          <p class="mb-0 fs-13 box-topic">
                            Total Admin
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
                        <i class='bx bx-plus-medical two'></i>
                        <div class="indicator second">
                          <i class='bx bxs-right-arrow-circle second'></i>
                          <a href="stafflist.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $count = "SELECT * FROM `staff`";
                        if ($result = mysqli_query($data, $count)) {
                          $staffCount = mysqli_num_rows($result);
                        ?>
                          <h2 class="text-black mb-2 font-w600"><?php echo $staffCount ?></h2>
                          <p class="mb-0 fs-13 box-topic">
                            Total Staff
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
                        <i class='bx bxs-user one'></i>
                        <div class="indicator">
                          <i class='bx bxs-right-arrow-circle'></i>
                          <a href="adminUserlist.php" class="text">Head Over</a>
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
                            Total Patient
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
                        <i class='bx bxs-comment-add four'></i>
                        <div class="indicator ">
                          <i class='bx bxs-right-arrow-circle fourth'></i>
                          <a href="adminContact.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $status = "Received";
                        $count = "SELECT * FROM `contact` WHERE `msgStatus`='$status'";
                        if ($result = mysqli_query($data, $count)) {
                          $contactCount = mysqli_num_rows($result);
                        ?>
                          <h2 class="text-black mb-2 font-w600"><?php echo $contactCount ?></h2>
                          <p class="mb-0 fs-13 box-topic">
                            Contact Request
                          </p>
                        <?php  } ?>
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
            <div class="card ">
              <div class="card-body">
                <h4 class="card-title">Admin List</h4>
                <div class="table-responsive">
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
                      $viewSql = "SELECT * FROM `admin` ORDER BY `adminId` DESC LIMIT 5";
                      $result = mysqli_query($data, $viewSql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $aid = $row['adminId'];
                        $aname = $row['adminName'];
                        $aprefix = $row['adminPrefix'];
                        $aemail = $row['adminEmail'];
                      ?>
                        <tr>
                          <td><?php echo $aprefix . "" . $aid; ?></td>
                          <td><?php echo $aname; ?></td>
                          <td><?php echo $aemail; ?></td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="d-flex flex-row-reverse">
                  <a href="adminlist.php">
                    <button type="button" class="btn btn-primary">See All</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card ">
              <div class="card-body">
                <h4 class="card-title">Medical Staff List</h4>
                <div class="table-responsive">
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
                      $viewSql = "SELECT * FROM `staff` ORDER BY `staffId` DESC LIMIT 5";
                      $result = mysqli_query($data, $viewSql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $sid = $row['staffId'];
                        $sname = $row['staffName'];
                        $sprefix = $row['staffPrefix'];
                        $semail = $row['staffEmail'];
                      ?>
                        <tr>
                          <td><?php echo $sprefix . "" . $sid; ?></td>
                          <td><?php echo $sname; ?></td>
                          <td><?php echo $semail; ?></td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="d-flex flex-row-reverse">
                  <a href="stafflist.php">
                    <button type="button" class="btn btn-primary">See All</button>
                  </a>
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
          <div class="col">
            <div class="card ">
              <div class="card-body">
                <h4 class="card-title">Recent Contact Message</h4>
                <div class="table-responsive">
                  <?php
                  $viewSql = "SELECT * FROM `contact` ORDER BY `msgID` DESC LIMIT 5";
                  $result = mysqli_query($data, $viewSql);
                  ?>
                  <table class="table table-hover table-condensed" style="width:100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          $mid = $row['msgID'];
                          $mprefix = $row['msgPrefix'];
                          $mstatus = $row['msgStatus'];
                          $memail = $row['msgEmail'];

                          if ($mstatus == "Received") {
                            $color = "btn-warning";
                          } else if ($mstatus == "Replied") {
                            $color = "btn-success";
                          }
                      ?>
                          <tr>
                            <td><?php echo $mprefix . "" . $mid; ?></td>
                            <td><?php echo $memail; ?></td>
                            <td>
                              <button type="button" class="btn <?php echo $color; ?>">
                                <?php echo $mstatus; ?>
                              </button>
                            </td>
                          </tr>
                      <?php  }
                      }
                      ?>
                    </tbody>
                  </table>
                  <div class="d-flex flex-row-reverse">
                    <a href="adminContact.php">
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
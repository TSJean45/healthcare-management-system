<?php
include 'connection.php';
?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

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
                          <a href="adminUserlist.html" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <h2 class="text-black mb-2 font-w600">65</h2>
                        <p class="mb-0 fs-13 box-topic">
                          Total User
                        </p>
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
                          <a href="stafflist.html" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <h2 class="text-black mb-2 font-w600">45</h2>
                        <p class="mb-0 fs-13 box-topic">
                          Total Staff
                        </p>
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
                          <a href="adminApp.html" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <h2 class="text-black mb-2 font-w600">56</h2>
                        <p class="mb-0 fs-13 box-topic">
                          Appointment
                        </p>
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
                          <a href="adminContact.html" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <h2 class="text-black mb-2 font-w600">23</h2>
                        <p class="mb-0 fs-13 box-topic">
                          Contact Request
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Table -->
      <div class="list-boxes">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row ">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Registered User</h4>
                    <div class="table-responsive">
                      <table class="table table-hover table-condensed">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>ID</th>
                            <th>Date Joined</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>6/2/2022</td>
                            <td><button type="button" class="btn btn-danger">New</button></td>
                          </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>53275532</td>
                            <td>6/2/2022</td>
                            <td><button type="button" class="btn btn-danger">New</button></td>
                          </tr>
                          <tr>
                            <td>John</td>
                            <td>53275533</td>
                            <td>6/2/2022</td>
                            <td><button type="button" class="btn btn-danger">New</button></td>
                          </tr>
                          <tr>
                            <td>Peter</td>
                            <td>53275534</td>
                            <td>6/2/2022</td>
                            <td><button type="button" class="btn btn-danger">New</button></td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>53275535</td>
                            <td>6/2/2022</td>
                            <td><button type="button" class="btn btn-danger">New</button></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="d-flex flex-row-reverse">
                        <a href="adminUserlist.html">
                          <button type="button" class="btn btn-primary">See All</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Contact Request</h4>
                    <div class="table-responsive">
                      <table class="table table-hover table-condensed">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Contact Email</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>gimp23@osmye.com</td>
                            <td>6/2/2022</td>
                            <td class="action-button">
                              <a href="mailto:">
                                <button type="button" class="btn btn-light">
                                  <i class="fas fa-pen-alt"></i></button>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>aristotales@convoith.com</td>
                            <td>6/2/2022</td>
                            <td class="action-button">
                              <a href="mailto:">
                                <button type="button" class="btn btn-light">
                                  <i class="fas fa-pen-alt"></i></button>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>John</td>
                            <td>aristotales@convoith.com</td>
                            <td>6/2/2022</td>
                            <td class="action-button">
                              <a href="mailto:">
                                <button type="button" class="btn btn-light">
                                  <i class="fas fa-pen-alt"></i></button>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>Peter</td>
                            <td>okyou0327@eluvit.com</td>
                            <td>6/2/2022</td>
                            <td class="action-button">
                              <a href="mailto:">
                                <button type="button" class="btn btn-light">
                                  <i class="fas fa-pen-alt"></i></button>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>moqehycaxas@eloltsf.com</td>
                            <td>6/2/2022</td>
                            <td class="action-button">
                              <a href="mailto:">
                                <button type="button" class="btn btn-light">
                                  <i class="fas fa-pen-alt"></i></button>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>shaneotd@tampicobrush.org</td>
                            <td>6/2/2022</td>
                            <td class="action-button">
                              <a href="mailto:">
                                <button type="button" class="btn btn-light">
                                  <i class="fas fa-pen-alt"></i></button>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>jeremyt@how2t.site</td>
                            <td>6/2/2022</td>
                            <td class="action-button">
                              <a href="mailto:">
                                <button type="button" class="btn btn-light">
                                  <i class="fas fa-pen-alt"></i></button>
                              </a>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                      <div class="d-flex flex-row-reverse">
                        <a href="adminContact.html">
                          <button type="button" class="btn btn-primary">See All</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Medicine Stock</h4>
                    <div class="table-responsive">
                      <?php
                      $viewSql = "SELECT * FROM `medstock`";
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
                          ?>
                              <tr>
                                <td><?php echo $prefix . "" . $id; ?></td>
                                <td class="d-none"><?php echo $id ?></td>
                                <td><?php echo $name; ?></td>
                                <td>
                                  <div class="progress" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped <?php echo $color; ?>" role="progressbar" style="width: <?php echo $per; ?>%" aria-valuenow="<?php echo $per; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><?php echo $qty; ?></td>
                                <td><?php echo $expDate; ?></td>
                                <!-- <td class="action-button">
                          <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                            <i class="fas fa-eye"></i></button>
                        </td> -->
                              </tr>
                          <?php  }
                          }
                          ?>
                        </tbody>
                      </table>
                      <div class="d-flex flex-row-reverse">
                        <a href="adminStock.php">
                          <button type="button" class="btn btn-primary">See All</button>
                        </a>
                      </div>
                    </div>
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
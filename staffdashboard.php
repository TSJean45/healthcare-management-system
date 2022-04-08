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
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
            <span class="profile_name"><?php echo $_SESSION['staffName']; ?></span>
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
                          <a href="staffUserlist.html" class="text">Head Over</a>
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
                        <i class="fas fa-syringe two"></i>
                        <div class="indicator second">
                          <i class='bx bxs-right-arrow-circle second'></i>
                          <a href="staffVac.html" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <h2 class="text-black mb-2 font-w600">10</h2>
                        <p class="mb-0 fs-13 box-topic">
                          Vaccination
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
                          <a href="staffApp.html" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <h2 class="text-black mb-2 font-w600">3</h2>
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
                        <i class="fas fa-prescription-bottle-alt four"></i>
                        <div class="indicator ">
                          <i class='bx bxs-right-arrow-circle fourth'></i>
                          <a href="staffStock.php" class="text">Head Over</a>
                        </div>
                      </div>
                      <div class="col-xl-7 col-sm-7">
                        <?php
                        $count = "SELECT * FROM `medstock` WHERE `stockQty`<=200";
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
                        <a href="staffUserList.html">
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
                    <h4 class="card-title">Vaccination</h4>
                    <div class="table-responsive">
                      <table class="table table-hover table-condensed">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>gimp23@osmye.com</td>
                            <td>6/2/2022</td>
                          </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>aristotales@convoith.com</td>
                            <td>6/2/2022</td>
                          </tr>
                          <tr>
                            <td>John</td>
                            <td>aristotales@convoith.com</td>
                            <td>6/2/2022</td>
                          </tr>
                          <tr>
                            <td>Peter</td>
                            <td>okyou0327@eluvit.com</td>
                            <td>6/2/2022</td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>moqehycaxas@eloltsf.com</td>
                            <td>6/2/2022</td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>shaneotd@tampicobrush.org</td>
                            <td>6/2/2022</td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>jeremyt@how2t.site</td>
                            <td>6/2/2022</td>
                          </tr>

                        </tbody>
                      </table>
                      <div class="d-flex flex-row-reverse">
                        <a href="staffVac.html">
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
                                <td><?php echo $expDate; ?></td>
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
        </div>
      </div>
  </section>

  <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure that you want to delete the selected data?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editStock" tabindex="-1" aria-labelledby="editStockLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editStock">Edit Stock Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputStockID" class="form-label">Stock ID</label>
              <input type="text" class="form-control" id="inputStockID">
            </div>
            <div class="mb-3">
              <label for="inputStockName" class="form-label">Stock Name</label>
              <input type="text" class="form-control" id="inputStockName">
            </div>
            <div class="mb-3">
              <label for="inputStockAmount" class="form-label">Stock Amount</label>
              <input type="text" class="form-control" id="inputStockAmount">
            </div>
            <div class="mb-3">
              <label for="inputStockExpire" class="form-label">Stock Expiration Date</label>
              <input type="date" class="form-control" id="inputStockExpire">
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>

</body>

</html>
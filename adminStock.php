<?php
include 'connection.php';
?>

<!DOCTYPE html>

<head>
  <?php include('asset/includes/cssCDN.php'); ?>

  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <title>Medicine Stock</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'adminStock';
  include('asset/includes/adminSidebar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Medicine Stock</span>
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
    <div class="home-content adminList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row mb-2">
              <div class="col-lg-5">
                <h4 class="card-title">Medicine Stock</h4>
              </div>
              <div class="col-lg-7">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-1">
                    <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#printStock">
                      Print
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <?php
              $viewSql = "SELECT * FROM `medstock`";
              $result = mysqli_query($data, $viewSql);
              ?>
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <th> Stock ID </th>
                    <th class="d-none">ID</th>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- <div class="modal fade" id="viewMessage" tabindex="-1" aria-labelledby="viewMessageLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewMessage">Medicine Stock Detail</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="editID" id="editID">
          <h5>Stock ID </h5>
          <p><?php echo $prefix . "" . $id; ?></p>
          <h5>Stock Name</h5>
          <p><?php echo $name; ?></p>
          <h5>Stock Amount</h5>
          <p><?php echo $qty; ?></p>
          <h5>Stock Expiration Date</h5>
          <p><?php echo $expDate; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> -->


  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
</body>

</html>
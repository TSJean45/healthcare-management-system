<?php
include 'connection.php';
?>

<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <!-- Boxicon Icon -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/fb95a6dbf4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Medicine Stock</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <div class="sidebar">
    <div class="logo-details">
      <img src="asset/image/logo pic.png" alt="">
      <span class="logo_name">JJJ MedCare</span>
    </div>

    <div class="sidebar-details">
      <ul class="nav-links">
        <li class="item">
          <a href="admindashboard.html">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Main Dashboard</span>
          </a>
        </li>
        <li class="item">
          <a href="adminlist.html">
            <i class='fa fa-user-cog fa-xs'></i>
            <span class="links_name">Admin</span>
          </a>
        </li>
        <li class="item">
          <a href="stafflist.html">
            <i class='fa fa-user-md fa-xs'></i>
            <span class="links_name">Medical Staff</span>
          </a>
        </li>
        <li class="item">
          <a href="adminUserlist.html">
            <i class='fa fa-user fa-xs'></i>
            <span class="links_name">User</span>
          </a>
        </li>
        <li class="item">
          <a href="adminMedRec.html">
            <i class="fas fa-notes-medical"></i>
            <span class="links_name">Medical Record</span>
          </a>
        </li>
        <li class="item">
          <a href="adminContact.html">
            <i class="fas fa-file-signature"></i>
            <span class="links_name">Contact</span>
          </a>
        </li>
        <li class="item">
          <a href="adminVac.html">
            <i class="fas fa-syringe"></i>
            <span class="links_name">Vaccination</span>
          </a>
        </li>
        <li class="item">
          <a href="adminApp.html">
            <i class="fas fa-calendar-check"></i>
            <span class="links_name">Appointment</span>
          </a>
        </li>
        <li class="item">
          <a href="adminStock.html" class="active">
            <i class="fas fa-prescription-bottle-alt"></i>
            <span class="links_name">Medicine Stock</span>
          </a>
        </li>
        <li class="item">
          <a href="adminprofile.html">
            <i class='bx bxs-user-rectangle'></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li class="item">
          <a href="index.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

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
            <div class="row">
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
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> Stock ID </th>
                    <th class="d-none">ID</th>
                    <th> Stock Name </th>
                    <th> Stock Bar </th>
                    <th> Stock Amount </th>
                    <th>Stock Expiration Date</th>
                    <th> Action </th>
                  </tr>
                </thead>
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

                    <tbody>
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
                        <td class="action-button">
                          <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                            <i class="fas fa-eye"></i></button>
                        </td>
                      </tr>
                    </tbody>
                <?php  }
                }
                ?>

              </table>
              <div class="d-flex flex-row my-auto">
                <button type="button" class="btn"><i class="fas fa-arrow-circle-left fa-lg"></i></button>
                <h5 class="my-auto">1</h5>
                <button type="button" class="btn"><i class="fas fa-arrow-circle-right fa-lg"></i></button></td>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="modal fade" id="viewMessage" tabindex="-1" aria-labelledby="viewMessageLabel" aria-hidden="true">
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
  </div>


  <!-- Bootstrap JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
</body>

</html>
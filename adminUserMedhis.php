<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>User</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'adminUserlist';
  include('asset/includes/adminSidebar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">User</span>
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

  <div class="home-section">
    <div class="home-content-breadcrumb">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="adminUserlist.php">User</a></li>
          <li class="breadcrumb-item"><a href="adminUserProfile.php">User Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">User Medical History</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="home-section ">
    <div class="home-content staffList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <h4 class="card-title">Medical Record List</h4>
            </div>
            <div class="table-responsive table-medRec">
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width:2% "> No</th>
                    <th style="width:2% "> Record ID</th>
                    <th style="width:20% "> User Name </th>
                    <th style="width:5% "> User ID </th>
                    <th style="width:15% ">Medical Staff Assigned</th>
                    <th style="width:10% "> Date Admitted</th>
                    <th style="width:10% "> Disease </th>
                    <th style="width:10% "> Status </th>
                    <th style="width:10%"> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        </label>
                      </div>
                    </td>
                    <td>R101</td>
                    <td class="py-1">
                      Lian Sho Khia
                    </td>
                    <td>53275531</td>
                    <td>
                      #S-12012
                    </td>
                    <td>7/12/2021</td>
                    <td>Heart Attack</td>
                    <td>
                      <button type="button" class="btn btn-outline-success">
                        <i class="fas fa-check-circle">Recovered</i>
                      </button>
                    </td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                        <i class="fas fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        </label>
                      </div>
                    </td>
                    <td>R102</td>
                    <td class="py-1">
                      Lian Sho Khia
                    </td>
                    <td>53275531</td>
                    <td>
                      #S-12012
                    </td>
                    <td>7/12/2021</td>
                    <td>Heart Attack</td>
                    <td>
                      <button type="button" class="btn btn-outline-success">
                        <i class="fas fa-check-circle">Recovered</i>
                      </button>
                    </td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                        <i class="fas fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        </label>
                      </div>
                    </td>
                    <td>R103</td>
                    <td class="py-1">
                      Lian Sho Khia
                    </td>
                    <td>53275531</td>
                    <td>
                      #S-12012
                    </td>
                    <td>7/12/2021</td>
                    <td>Heart Attack</td>
                    <td>
                      <button type="button" class="btn btn-outline-success">
                        <i class="fas fa-check-circle">Recovered</i>
                      </button>
                    </td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                        <i class="fas fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        </label>
                      </div>
                    </td>
                    <td>R104</td>
                    <td class="py-1">
                      Lian Sho Khia
                    </td>
                    <td>53275531</td>
                    <td>
                      #S-12012
                    </td>
                    <td>7/12/2021</td>
                    <td>Heart Attack</td>
                    <td>
                      <button type="button" class="btn btn-outline-success">
                        <i class="fas fa-check-circle">Recovered</i>
                      </button>
                    </td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                        <i class="fas fa-eye"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="mx-1">
                  <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#printVaccination">
                    Print
                  </button>
                </div>
              </div>
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
          <h5 class="modal-title" id="viewMessage">Medical Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Record ID </h5>
          <p>R101</p>
          <h5>User Name</h5>
          <p>Lian Sho Khia</p>
          <h5>User ID </h5>
          <p>53275531</p>
          <h5>Medical Staff Assigned</h5>
          <p>#S-12012</p>
          <h5>Data Admitted</h5>
          <p>7/12/2021</p>
          <h5>Disease</h5>
          <p>Heart Attack</p>
          <h5>Status</h5>
          <p>Recovered</p>
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/deleteData.js"></script>
</body>

</html>
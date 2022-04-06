<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Admin</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'adminlist';
  include('asset/includes/adminSidebar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Admin</span>
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
          <li class="breadcrumb-item"><a href="adminlist.php">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="home-section">
    <div class="home-content">
      <!-- Overview Boxes-->
      <div class="profile">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 m-t35">
              <div class="card card-coin">
                <img src="asset/image/long-emp.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="row profile-details">
            <div class="col-xl-3">
              <div class="card card-coin">
                <img src="asset/image/short-emp.jpg" alt="">
              </div>
            </div>
            <div class="col-xl-9 m-t35 my-auto">
              <div class="row">
                <div class="mr-auto pr-3">
                  <h2 class="font-w300 mb-sm-2 mb-1 text-black">Tan Szu Jean</h2>
                </div>
              </div>
              <div class="row">
                <div class="mr-auto pr-3">
                  <p class="mb-sm-2 mb-1">#AD-1201200641</p>
                  <p class="mb-sm-2 mb-1">szujeana@admin.jjj.com</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Phone Number:</h4>
                    <p>+60 11-10831460</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Gender:</h4>
                    <p>Female</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Birthdate:</h4>
                    <p>9 March 2002</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mr-auto pr-3">
                    <h4>Address:</h4>
                    <p>Nova 1 Apartment Kuala Lumpur</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 p-3">
            <div class="mr-auto pr-3">
              <h4 class="fs-20 text-black font-w600">Biography</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 p-3">
            <h4 class="fs-20 text-black font-w600">Qualification</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/deleteData.js"></script>
</body>

</html>
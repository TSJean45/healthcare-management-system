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

  <section class="home-section ">
    <div class="home-content adminList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Admin List</h4>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> No</th>
                    <th> Admin Name </th>
                    <th> Admin ID </th>
                    <th> Admin Email Address </th>
                    <th> Action </th>
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
                    <td class="py-1">
                      Lian Sho Khia
                    </td>
                    <td>#AD-1201000641</td>
                    <td>
                      rmutii@admin.jjj.com
                    </td>
                    <td class="action-button">
                      <a href="adminViewAdminProfile.php">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                          <i class="fas fa-eye"></i></button>
                      </a>
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
                    <td class="py-1">
                      Muhammed Hj Wan Rusman bin Dahalan
                    </td>
                    <td>#AD-1201211641</td>
                    <td>
                      subramaniam.sandrakasi@admin.jjj.com
                    </td>
                    <td class="action-button">
                      <a href="adminViewAdminProfile.php">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                          <i class="fas fa-eye"></i></button>
                      </a>
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
                    <td class="py-1">
                      Fang Shun Chio
                    </td>
                    <td>#AD-1201200231</td>
                    <td>
                      oon.gekfey@admin.jjj.com
                    </td>
                    <td class="action-button">
                      <a href="adminViewAdminProfile.php">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                          <i class="fas fa-eye"></i></button>
                      </a>
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
                    <td class="py-1">
                      Guan Chuo Sia
                    </td>
                    <td>#AD-1201200623</td>
                    <td>
                      lakshmi.kavita@admin.jjj.com
                    </td>
                    <td class="action-button">
                      <a href="adminViewAdminProfile.php">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                          <i class="fas fa-eye"></i></button>
                      </a>
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
                    <td class="py-1">
                      Aslina Chiew Hin Sian
                    </td>
                    <td>#AD-1201200641</td>
                    <td>
                      william.asa@rahman.biz
                    </td>
                    <td class="action-button">
                      <a href="adminViewAdminProfile.php">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                          <i class="fas fa-eye"></i></button>
                      </a>
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
                    <td class="py-1">
                      Aina binti Saufishazwi Ya'accob
                    </td>
                    <td>#AD-1201223641</td>
                    <td>
                      rajendra.sonziak@admin.jjj.com
                    </td>
                    <td class="action-button">
                      <a href="adminViewAdminProfile.php">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                          <i class="fas fa-eye"></i></button>
                      </a>
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
                    <td class="py-1">
                      Hajjah Shahida binti Hazim
                    </td>
                    <td>#AD-1201220641</td>
                    <td>
                      sau.loichih@admin.jjj.com
                    </td>
                    <td class="action-button">
                      <a href="adminViewAdminProfile.php">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                          <i class="fas fa-eye"></i></button>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="px-3">
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAdmin">
                    Delete Authorised Admin
                  </button>
                </div>
                <div class="px-3">
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAdmin">
                    Add Authorised Admin
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

  <!-- Modal -->
  <div class="modal fade" id="deleteAdmin" tabindex="-1" aria-labelledby="deleteAdminLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteAdminLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure that you want to delete the selected admin?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAdminLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addAdmin">Add Authorised Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">ID</label>
              <input type="text" class="form-control" id="inputID">
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="mb-3">
              <label for="inputPass" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPass">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Add</button>
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
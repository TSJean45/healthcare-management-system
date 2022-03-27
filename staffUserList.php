<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>User</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'staffUserList';
  include('asset/includes/staffSideBar.php'); ?>

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

  <section class="home-section ">
    <div class="home-content staffList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <h4 class="card-title">User List</h4>
            </div>
            <div class="table-responsive table-staffList">
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> No</th>
                    <th> User Name </th>
                    <th> User ID </th>
                    <th> User Email Address </th>
                    <th>Date Joined</th>
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
                    <td>53275531</td>
                    <td>
                      rmutii@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      subramaniam.sandrakasi@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      oon.gekfey@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      lakshmi.kavita@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      william.asa@rahman.biz
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      rajendra.sonziak@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      sau.loichih@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      sau.loichih@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      sau.loichih@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
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
                    <td>53275531</td>
                    <td>
                      sau.loichih@gmail.com
                    </td>
                    <td>7 December 2021</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="staffUserProfile.html">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser">
                        <i class="fas fa-edit"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addUser">
                    Add User
                  </button>
                </div>
                <div class="mx-1">
                  <button type="button" class="btn btn-danger float-right" data-bs-toggle="modal" data-bs-target="#deleteData">
                    Delete User
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
  <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure that you want to delete the selected user?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUser">Add User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputName" class="form-label">User Name</label>
              <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">User ID</label>
              <input type="text" class="form-control" id="inputID">
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">User Email Address</label>
              <input type="text" class="form-control" id="inputEmail">
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
  <script src="asset/js/triggerToast.js"></script>
  <script src="asset/js/deleteData.js"></script>

</body>

</html>
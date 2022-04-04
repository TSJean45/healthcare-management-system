<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Medical Staff</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'stafflist';
  include('asset/includes/adminSidebar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Medical Staff</span>
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
            <h4 class="card-title">Medical Staff List</h4>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> No</th>
                    <th> Medical Staff Name </th>
                    <th> Medical Staff ID </th>
                    <th> Medical Staff Email Address </th>
                    <th>Position</th>
                    <th>Department</th>
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
                    <td>#S-19655</td>
                    <td>
                      rmutii@staff.jjj.com
                    </td>
                    <td>Nurse</td>
                    <td>Pediatrician</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-12566</td>
                    <td>
                      subramaniam.sandrakasi@staff.jjj.com
                    </td>
                    <td>Nurse</td>
                    <td>Podiatrist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-14525</td>
                    <td>
                      oon.gekfey@staff.jjj.com
                    </td>
                    <td>Nurse</td>
                    <td>Rheumatologist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-98565</td>
                    <td>
                      lakshmi.kavita@staff.jjj.com
                    </td>
                    <td>Nurse</td>
                    <td>Podiatrist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-18898</td>
                    <td>
                      william.asa@rahman.biz
                    </td>
                    <td>Nurse</td>
                    <td>Podiatrist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-11478</td>
                    <td>
                      rajendra.sonziak@staff.jjj.com
                    </td>
                    <td>Nurse</td>
                    <td>Podiatrist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-15484</td>
                    <td>
                      sau.loichih@staff.jjj.com
                    </td>
                    <td>Specialist</td>
                    <td>Podiatrist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-12016</td>
                    <td>
                      sau.loichih@staff.jjj.com
                    </td>
                    <td>Nurse</td>
                    <td>Phychiatrist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-12012</td>
                    <td>
                      sau.loichih@staff.jjj.com
                    </td>
                    <td>Nurse</td>
                    <td>Cardiologist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
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
                    <td>#S-12012</td>
                    <td>
                      sau.loichih@staff.jjj.com
                    </td>
                    <td>Surgeon</td>
                    <td>Cardiologist</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light">
                        <a href="adminViewStaffProfile.php">
                          <i class="fas fa-eye"></i></a></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStaff">
                        <i class="fas fa-edit"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="mx-1">
                  <button type="button" class="btn btn-danger float-right" data-bs-toggle="modal" data-bs-target="#deleteStaff">
                    Delete Authorised Medical Staff
                  </button>
                </div>
                <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addStaff">
                    Add Authorised Medical Staff
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
  <div class="modal fade" id="deleteStaff" tabindex="-1" aria-labelledby="deleteStaffLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteStaffLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure that you want to delete the selected medical staff?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addStaffLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addStaff">Add Authorised Medical Staff</h5>
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

  <div class="modal fade" id="editStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editStaffLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editStaff">Edit Authorised Medical Staff</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputName" class="form-label">Medical Staff Name</label>
              <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">Medical Staff ID</label>
              <input type="text" class="form-control" id="inputID">
            </div>
            <div class="mb-3">
              <label for="inputPosition" class="form-label">Position</label>
              <input type="text" class="form-control" id="inputPosition">
            </div>
            <div class="mb-3">
              <label for="inputDepartment" class="form-label">Department</label>
              <input type="text" class="form-control" id="inputDepartment">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save Changes</button>
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
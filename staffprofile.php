<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/navbar.css">
  <link rel="stylesheet" href="asset/css/staffstyle.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Medical Staff Profile</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>
</head>

<body>


  <!-- Side Bar -->
  <?php $page = 'staffprofile';
  include('asset/includes/staffSideBar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Medical Staff Profile</span>
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
                  <p class="mb-sm-2 mb-1">#S-12012</p>
                  <p class="mb-sm-2 mb-1">szujeana@staff.jjj.com</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mr-auto pr-3">
                    <h4>Phone Number:</h4>
                    <p>+60 11-10831460</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mr-auto pr-3">
                    <h4>Gender:</h4>
                    <p>Female</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mr-auto pr-3">
                    <h4>Position:</h4>
                    <p>Nurse</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mr-auto pr-3">
                    <h4>Birthdate:</h4>
                    <p>9 March 2002</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mr-auto pr-3">
                    <h4>Address:</h4>
                    <p>Nova 1 Apartment Kuala Lumpur</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mr-auto pr-3">
                    <h4>Department:</h4>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfile">
                Edit Profile
              </button>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#changePass">
                Change Password
              </button>
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

  <!-- Modal -->
  <div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editprofile" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editprofile">Edit Your Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label>Upload Profile Picture</label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label>Upload Cover Photo</label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label for="inputName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
              <label for="inputPhone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="inputPhone">
            </div>
            <div class="mb-3">
              <label for="inputGender" class="form-label">Gender</label>
              <select id="inputGender" class="form-control" name="gender">
                <option value="female">Female</option>
                <option value="male">Male</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="inputBday" class="form-label">Birthdate</label>
              <input type="date" class="form-control" id="inputBday">
            </div>
            <div class="mb-3">
              <label for="inputBio" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputPosition">
            </div>
            <div class="mb-3">
              <label for="inputPosition" class="form-label">Position</label>
              <input type="text" class="form-control" id="inputPosition">
            </div>
            <div class="mb-3">
              <label for="inputDepartment" class="form-label">Department</label>
              <input type="text" class="form-control" id="inputDepartment">
            </div>
            <div class="mb-3">
              <label for="inputBio" class="form-label">Biography</label>
              <input type="text" class="form-control" id="inputPosition">
            </div>
            <div class="mb-3">
              <label for="inputQuali" class="form-label">Qualification</label>
              <input type="text" class="form-control" id="inputQuali">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="changePass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changePass" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changePass">Change Your Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputOldPass" class="form-label">Existing Password</label>
              <input type="password" class="form-control" id="inputOldPass" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="inputNewPass" class="form-label">New Password</label>
              <input type="text" class="form-control" id="inputNewPass">
            </div>
            <div class="mb-3">
              <label for="inputConPass" class="form-label">Confirm Password</label>
              <input type="text" class="form-control" id="inputConPass">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Change Password</button>
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
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

  <div class="home-section">
    <div class="home-content-breadcrumb">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="staffUserList.html">User</a></li>
          <li class="breadcrumb-item"><a href="staffUserProfile.html">User Profile</a></li>
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
                    <th style="width:3%">Record ID</th>
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
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editRec">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
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
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editRec">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
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
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editRec">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
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
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editRec">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addRec">
                    Add Medical Record
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
          Are you sure that you want to delete the selected record?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addRec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addRecLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addRec">Add Medical Record</h5>
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
              <label for="inputStaff" class="form-label">Medical Staff Assigned</label>
              <input type="text" class="form-control" id="inputStaff">
            </div>
            <div class="mb-3">
              <label for="inputDateAdmitted" class="form-label">Date Admitted</label>
              <input type="date" class="form-control" id="inputDateAdmitted">
            </div>
            <div class="mb-3">
              <label for="inputDisease" class="form-label">Disease</label>
              <input type="text" class="form-control" id="inputDisease">
            </div>
            <div class="mb-3">
              <label for="inputRecStatus" class="form-label">Status</label>
              <select id="inputRecStatus" class="form-control" name="recStatus">
                <option value="new">New</option>
                <option value="treatment">In Treatment</option>
                <option value="recover">Recovered</option>
              </select>
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

  <div class="modal fade" id="editRec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editRecLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editRec">Edit Medical Record</h5>
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
              <label for="inputStaff" class="form-label">Medical Staff Assigned</label>
              <input type="text" class="form-control" id="inputStaff">
            </div>
            <div class="mb-3">
              <label for="inputDateAdmitted" class="form-label">Date Admitted</label>
              <input type="date" class="form-control" id="inputDateAdmitted">
            </div>
            <div class="mb-3">
              <label for="inputDisease" class="form-label">Disease</label>
              <input type="text" class="form-control" id="inputDisease">
            </div>
            <div class="mb-3">
              <label for="inputRecStatus" class="form-label">Status</label>
              <select id="inputRecStatus" class="form-control" name="recStatus">
                <option value="new">New</option>
                <option value="treatment">In Treatment</option>
                <option value="recover">Recovered</option>
              </select>
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
</body>

</html>
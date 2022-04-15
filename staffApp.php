<?php
    session_start();
    require_once('connection.php');
?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Appointment</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'staffApp';
  include('asset/includes/staffSideBar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Appointment</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
            <?php 

            $currentUser = $_SESSION['staffId'];
            $sql = "SELECT * FROM staff WHERE staffId ='$currentUser'";
  
            $result=mysqli_query($data,$sql);
  
            if($result){
              while($row = mysqli_fetch_assoc($result)){
                  $staffName = $row['staffName'];
                  
            ?>

            <span class="profile_name"><?php echo $staffName ?></span>

            <?php } } ?>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </section>

  <section class="home-section ">
    <div class="home-content">
      <div class="col-xl-12 grid-margin stretch-card">
        <div class="card  mx-3">
          <div class="card-header">
            <h4 class="card-title">Appointment details</h4>
          </div>
          <div class="table-responsive table-wardStatus">
            <table class="table table-hover table-condensed">
              <thead>
                <tr>
                  <th> No</th>
                  <th> User ID </th>
                  <th> Appointment ID</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Status</th>
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
                    53275531
                  </td>
                  <td>
                    AP005
                  </td>
                  <td>10 Feburary 2022</td>
                  <td>10 a.m.</td>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-success">
                        <i class="fas fa-check-circle fa-lg" id="done">Done</i>
                      </button>

                    </a>
                  </td>
                  <td class="action-button">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editApp">
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
                  <td class="py-1">
                    53275531
                  </td>
                  <td>
                    AP006
                  </td>
                  <td>10 Feburary 2022</td>
                  <td>10 a.m.</td>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-success">
                        <i class="fas fa-check-circle fa-lg" id="done">Done</i>
                      </button>

                    </a>
                  </td>
                  <td class="action-button">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editApp">
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
                  <td class="py-1">
                    53275531
                  </td>
                  <td>
                    AP007
                  </td>
                  <td>10 Feburary 2022</td>
                  <td>10 a.m.</td>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-danger">
                        <i class="fas fa-window-close fa-lg" id="cancel">Cancelled</i>
                      </button>

                    </a>
                  </td>
                  <td class="action-button">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editApp">
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
                  <td class="py-1">
                    53275531
                  </td>
                  <td>
                    AP008
                  </td>
                  <td>10 Feburary 2022</td>
                  <td>10 a.m.</td>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-danger">
                        <i class="fas fa-window-close fa-lg" id="cancel">Cancelled</i>
                      </button>

                    </a>
                  </td>
                  <td class="action-button">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editApp">
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
                  <td class="py-1">
                    53275531
                  </td>
                  <td>
                    AP009
                  </td>
                  <td>10 Feburary 2022</td>
                  <td>10 a.m.</td>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-warning">
                        <i class="far fa-calendar-check fa-lg" id="schedule">Scheduled</i>
                      </button>

                    </a>
                  </td>
                  <td class="action-button">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editApp">
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
                  <td class="py-1">
                    53275531
                  </td>
                  <td>
                    AP010
                  </td>
                  <td>10 Feburary 2022</td>
                  <td>10 a.m.</td>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-warning">
                        <i class="far fa-calendar-check fa-lg" id="schedule">Scheduled</i>
                      </button>

                    </a>
                  </td>
                  <td class="action-button">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editApp">
                      <i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                      <i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="d-flex flex-row-reverse">
              <div class="mx-1">
                <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#printApp">
                  Print
                </button>
              </div>
              <div class="mx-1">
                <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addApp">
                  Add Appointment
                </button>
              </div>
            </div>
            <div class="d-flex flex-row my-auto flex-row">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-arrow-circle-left fa-lg"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-circle-right fa-lg"></i></a></li>
                </ul>
              </nav>
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

  <div class="modal fade" id="editApp" tabindex="-1" aria-labelledby="editAppLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editApp">Edit Appointment Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputAppID" class="form-label">Appointment ID</label>
              <input type="text" class="form-control" id="inputAppID">
            </div>
            <div class="mb-3">
              <label for="inputAppName" class="form-label">Appointment Name</label>
              <input type="text" class="form-control" id="inputAppName">
            </div>
            <div class="mb-3">
              <label for="inputAppDate" class="form-label">Appointment Date</label>
              <input type="date" class="form-control" id="inputAppDate">
            </div>
            <div class="mb-3">
              <label for="inputAppTime" class="form-label">Appointment Time</label>
              <input type="text" class="form-control" id="inputAppTime">
            </div>
            <div class="mb-3">
              <label for="inputAppStatus" class="form-label">Status</label>
              <select id="inputAppStatus" class="form-control" name="status">
                <option value="cancel">Cancelled</option>
                <option value="done">Done</option>
                <option value="schedule">Scheduled</option>
              </select>
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

  <div class="modal fade" id="addApp" tabindex="-1" aria-labelledby="addAppLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addApp">Add Appointment Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputAppID" class="form-label">Appointment ID</label>
              <input type="text" class="form-control" id="inputAppID">
            </div>
            <div class="mb-3">
              <label for="inputAppName" class="form-label">Appointment Name</label>
              <input type="text" class="form-control" id="inputAppName">
            </div>
            <div class="mb-3">
              <label for="inputAppDate" class="form-label">Appointment Date</label>
              <input type="date" class="form-control" id="inputAppDate">
            </div>
            <div class="mb-3">
              <label for="inputAppTime" class="form-label">Appointment Time</label>
              <input type="text" class="form-control" id="inputAppTime">
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Add Appointment</button>
          </div>
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
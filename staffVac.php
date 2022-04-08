<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Vaccination</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'staffVac';
  include('asset/includes/staffSideBar.php'); ?>


  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Vaccination</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
            <span class="profile_name"><?php echo $_SESSION['staffName']; ?></span>
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
              <h4 class="card-title">Vaccination Details</h4>
            </div>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> No</th>
                    <th> User ID </th>
                    <th> Vaccine Name</th>
                    <th>Vaccine ID</th>
                    <th>Medical Staff Assigned</th>
                    <th>Vaccination Date</th>
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
                      Pfizer-BioNTech
                    </td>
                    <td>#VP101</td>
                    <td>#S-19655</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      Pfizer-BioNTech
                    </td>
                    <td>#VP101</td>
                    <td>#S-19655</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      AstraZeneca
                    </td>
                    <td>#VA101</td>
                    <td>#S-14525</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      AstraZeneca
                    </td>
                    <td>#VA101</td>
                    <td>#S-14525</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      AstraZeneca
                    </td>
                    <td>#VA101</td>
                    <td>#S-14525</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      Sinovac
                    </td>
                    <td>#VS101</td>
                    <td> #S-12566</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      Sinovac
                    </td>
                    <td>#VS101</td>
                    <td> #S-12566</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      Sinovac
                    </td>
                    <td>#VS101</td>
                    <td> #S-12566</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      Sinovac
                    </td>
                    <td>#VS101</td>
                    <td> #S-12566</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
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
                      Sinovac
                    </td>
                    <td>#VS101</td>
                    <td> #S-12566</td>
                    <td>10 Feburary 2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editVaccine">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
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
                <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addVaccine">
                    Add Vaccination
                  </button>
                </div>
              </div>
              <div class="d-flex flex-row my-auto">
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
    </div>
  </section>

  <div class="modal fade" id="addVaccine" tabindex="-1" aria-labelledby="addVaccineLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addVaccine">Add Vaccination</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputVaccineID" class="form-label">Vaccine ID</label>
              <input type="text" class="form-control" id="inputVaccineID">
            </div>
            <div class="mb-3">
              <label for="inputVaccineName" class="form-label">Vaccine Name</label>
              <input type="text" class="form-control" id="inputVaccineName">
            </div>
            <div class="mb-3">
              <label for="inputStaffID" class="form-label">Medical Staff ID</label>
              <input type="text" class="form-control" id="inputStaffID">
            </div>
            <div class="mb-3">
              <label for="inputVaccineDate" class="form-label">Vaccination Date</label>
              <input type="date" class="form-control" id="inputVaccineDate">
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Add Vaccination</button>
          </div>
        </div>
      </div>
    </div>
  </div>

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

  <div class="modal fade" id="editVaccine" tabindex="-1" aria-labelledby="editVaccineLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editVaccine">Edit Vaccination Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputVaccineID" class="form-label">Vaccine ID</label>
              <input type="text" class="form-control" id="inputVaccineID">
            </div>
            <div class="mb-3">
              <label for="inputVaccineName" class="form-label">Vaccine Name</label>
              <input type="text" class="form-control" id="inputVaccineName">
            </div>
            <div class="mb-3">
              <label for="inputStaffID" class="form-label">Medical Staff ID</label>
              <input type="text" class="form-control" id="inputStaffID">
            </div>
            <div class="mb-3">
              <label for="inputVaccineDate" class="form-label">Vaccination Date</label>
              <input type="date" class="form-control" id="inputVaccineDate">
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


  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/triggerToast.js"></script>
  <script src="asset/js/deleteData.js"></script>

</body>

</html>
<?php
include 'connection.php';

if (isset($_POST["addBtn"])) {
  $name = $_POST["inputStockName"];
  $qty = $_POST["inputStockAmount"];
  $expDate = $_POST["inputStockExpire"];

  $sql = "INSERT INTO `medstock` (`stockName`,`stockQty`,`stockExpDate`) VALUES ('$name','$qty','$expDate') ";
  $result = mysqli_query($data, $sql);

  if ($result) {
?>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="">
        <strong class="me-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
    </div>
<?php

  }
}
?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
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
          <a href="staffdashboard.html">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Main Dashboard</span>
          </a>
        </li>
        <li class="item">
          <a href="staffUserList.html">
            <i class='fa fa-user fa-xs'></i>
            <span class="links_name">User</span>
          </a>
        </li>
        <li class="item">
          <a href="staffMedrec.html">
            <i class="fas fa-notes-medical"></i>
            <span class="links_name">Medical Record</span>
          </a>
        </li>
        <li class="item">
          <a href="staffVac.html">
            <i class="fas fa-syringe"></i>
            <span class="links_name">Vaccination</span>
          </a>
        </li>
        <li class="item">
          <a href="staffApp.html">
            <i class="fas fa-calendar-check"></i>
            <span class="links_name">Appointment</span>
          </a>
        </li>
        <li class="item">
          <a href="staffStock.html" class="active">
            <i class="fas fa-prescription-bottle-alt"></i>
            <span class="links_name">Medicine Stock</span>
          </a>
        </li>
        <li class="item">
          <a href="staffward.html">
            <i class="fas fa-procedures"></i>
            <span class="links_name">Ward</span>
          </a>
        </li>
        <li class="item">
          <a href="staffprofile.html">
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
    <div class="home-content staffList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Medicine Stock</h4>
            <div class="table-responsive">
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> Stock Name </th>
                    <th> Stock ID </th>
                    <th> Stock Bar </th>
                    <th> Stock Amount </th>
                    <th>Stock Expiration Date</th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      Acetaminophen
                    </td>
                    <td>#12392</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 50 </td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Paracetamol
                    </td>
                    <td>#34244</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 200 </td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Metformin
                    </td>
                    <td>#34243</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 300</td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Amlodipine
                    </td>
                    <td>#87544</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 80</td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Albuterol
                    </td>
                    <td>#32424</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 60 </td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Simvastatin
                    </td>
                    <td>#45353</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>90</td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Metoprolol
                    </td>
                    <td>#67686</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>30</td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Metformin
                    </td>
                    <td>#34243</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 300</td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      Acetaminophen
                    </td>
                    <td>#12392</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 50 </td>
                    <td>20/5/2022</td>
                    <td class="action-button">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editStock">
                        <i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                        <i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="mx-1">
                  <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#printStock">
                    Print
                  </button>
                </div>
                <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addStock">
                    Add Medicine Stock
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

  <div class="modal fade" id="addStock" tabindex="-1" aria-labelledby="addStockLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addStock">Add Stock</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" name="addStock">
            <div class="mb-3">
              <label for="inputStockName" class="form-label">Stock Name</label>
              <input type="text" class="form-control" name="inputStockName">
            </div>
            <div class="mb-3">
              <label for="inputStockAmount" class="form-label">Stock Amount</label>
              <input type="text" class="form-control" name="inputStockAmount">
            </div>
            <div class="mb-3">
              <label for="inputStockExpire" class="form-label">Stock Expiration Date</label>
              <input type="date" class="form-control" name="inputStockExpire">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" name="addBtn">Add Stock</button>
            </div>
          </form>
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

  <div class="modal fade" id="editStock" tabindex="-1" aria-labelledby="editStockLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editStock">Edit Stock Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="inputStockID" class="form-label">Stock ID</label>
              <input type="text" class="form-control" id="inputStockID">
            </div>
            <div class="mb-3">
              <label for="inputStockName" class="form-label">Stock Name</label>
              <input type="text" class="form-control" id="inputStockName">
            </div>
            <div class="mb-3">
              <label for="inputStockAmount" class="form-label">Stock Amount</label>
              <input type="text" class="form-control" id="inputStockAmount">
            </div>
            <div class="mb-3">
              <label for="inputStockExpire" class="form-label">Stock Expiration Date</label>
              <input type="date" class="form-control" id="inputStockExpire">
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


  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

  <!-- Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
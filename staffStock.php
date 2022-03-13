<?php
include 'connection.php';

if (isset($_POST["addBtn"])) {
  $name = $_POST["inputDataName"];
  $qty = $_POST["inputDataAmount"];
  $expDate = $_POST["inputDataExpire"];

  $addSql = "INSERT INTO `medstock` (`stockName`,`stockQty`,`stockExpDate`) VALUES ('$name','$qty','$expDate')";
  $result = mysqli_query($data, $addSql);

  if ($result) {
    echo '<script> alert("Data added"); </script>';
  } else {
    echo '<script> alert("Data not added"); </script>';
  }
}

if (isset($_POST["editBtn"])) {
  $id = $_POST["editID"];
  $name = $_POST["editDataName"];
  $qty = $_POST["editDataAmount"];
  $expDate = $_POST["editDataExpire"];

  $editSql = "UPDATE `medstock` SET `stockName`='$name',`stockQty`='$qty',`stockExpDate`='$expDate' WHERE `stockID`='$id'";
  $result = mysqli_query($data, $editSql);

  if ($result) {
    echo '<script> alert("Data updated"); </script>';
  } else {
    echo '<script> alert("Data not updated"); </script>';
  }
}

if (isset($_POST['deleteBtn'])) {
  $id = $_POST["deleteID"];

  $deleteSql = "DELETE FROM `medstock` WHERE `stockID`=$id";
  $result = mysqli_query($data, $deleteSql);

  if ($result) {
    echo '<script> alert("Data deleted"); </script>';
  } else {
    echo '<script> alert("Data not deleted"); </script>';
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

    <div class="home-content">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-5">
                <h4 class="card-title">Medicine Stock</h4>
              </div>
              <div class="col-lg-7">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-1">
                    <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#printStock">
                      Print
                    </button>
                  </div>
                  <div class="mx-1">
                    <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addData">
                      Add Medicine Stock
                    </button>
                  </div>
                  <div class="mx-1">
                    <button type="button" class="btn btn-primary" onclick="Toasty()">Test Toast</button>
                    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                          <img src="..." class="rounded me-2" alt="...">
                          <strong class="me-auto">Bootstrap</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="toast-body">
                          Hello, world! This is a toast message.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <?php
              $viewSql = "SELECT * FROM `medstock`";
              $result = mysqli_query($data, $viewSql);
              ?>
              <table class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th> Stock ID </th>
                    <th class="d-none">ID</th>
                    <th> Stock Name </th>
                    <th> Stock Bar </th>
                    <th> Stock Amount </th>
                    <th>Stock Expiration Date</th>
                    <th> Action </th>
                  </tr>
                </thead>
                <?php

                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $prefix = $row['prefix'];
                    $id = $row['stockID'];
                    $name = $row['stockName'];
                    $qty = $row['stockQty'];
                    $expDate = $row['stockExpDate'];
                    $per = ($qty / 2000) * 100;

                    if ($per <= 10) {
                      $color = "bg-danger";
                    } else if ($per > 10 && $per <= 60) {
                      $color = "bg-warning";
                    } else if ($per > 75) {
                      $color = "bg-success";
                    }
                ?>

                    <tbody>
                      <tr>
                        <td><?php echo $prefix . "" . $id; ?></td>
                        <td class="d-none"><?php echo $id ?></td>
                        <td><?php echo $name; ?></td>
                        <td>
                          <div class="progress" style="height: 20px;">
                            <div class="progress-bar progress-bar-striped <?php echo $color; ?>" role="progressbar" style="width: <?php echo $per; ?>%" aria-valuenow="<?php echo $per; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td><?php echo $qty; ?></td>
                        <td><?php echo $expDate; ?></td>
                        <td class="action-button">
                          <button type="button" class="btn btn-light editBtn">
                            <i class="fas fa-edit"></i></button>
                          <button type="button" class="btn btn-danger deleteBtn">
                            <i class="fas fa-trash-alt"></i></button>
                        </td>
                      </tr>
                    </tbody>
                <?php  }
                }
                ?>

              </table>
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


  <!-- Modal Form -->
  <!-- Add Stock -->
  <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addData">Add Stock</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" name="addData">
            <div class="mb-3">
              <label for="inputDataName" class="form-label">Stock Name</label>
              <input type="text" class="form-control" name="inputDataName">
            </div>
            <div class="mb-3">
              <label for="inputDataAmount" class="form-label">Stock Amount</label>
              <input type="text" class="form-control" name="inputDataAmount">
            </div>
            <div class="mb-3">
              <label for="inputDataExpire" class="form-label">Stock Expiration Date</label>
              <input type="date" class="form-control" name="inputDataExpire">
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

  <!-- Edit Stock -->
  <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editData">Edit Stock Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" name="editData">
            <div class="mb-3">
              <input type="hidden" name="editID" id="editID">
            </div>
            <div class="mb-3">
              <label for="inputDataName" class="form-label">Stock Name</label>
              <input type="text" class="form-control" name="editDataName" id="editDataName">
            </div>
            <div class="mb-3">
              <label for="inputDataAmount" class="form-label">Stock Amount</label>
              <input type="text" class="form-control" name="editDataAmount" id="editDataAmount">
            </div>
            <div class="mb-3">
              <label for="inputDataExpire" class="form-label">Stock Expiration Date</label>
              <input type="date" class="form-control" name="editDataExpire" id="editDataExpire">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" name="editBtn">Update Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Stock -->
  <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" name="deleteData">
            <div class="mb-3">
              <input type="hidden" name="deleteID" id="deleteID">
            </div>
            <div class="mb-3">
              Are you sure that you want to delete the selected data?
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" name="deleteBtn">Yes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast Message -->
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Bootstrap</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Hi!
      </div>
    </div>
  </div>

  <!-- Bootstrap JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/triggerToast.js"></script>
  <script src="asset/js/updateData.js"></script>
  <script src="asset/js/deleteData.js"></script>


</body>

</html>
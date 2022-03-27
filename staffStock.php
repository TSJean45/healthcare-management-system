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
  <?php include('asset/includes/cssCDN.php'); ?>

  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/staffstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <title>Medicine Stock</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>
  <!-- Side Bar -->
  <?php $page = 'staffStock';
  include('asset/includes/staffSideBar.php'); ?>

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
            <div class="row mb-2">
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
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <?php
              $viewSql = "SELECT * FROM `medstock`";
              $result = mysqli_query($data, $viewSql);
              ?>
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
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
                <tbody>
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
                  <?php  }
                  }
                  ?>
                </tbody>
              </table>
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
              <label for="editDataName" class="form-label">Stock Name</label>
              <input type="text" class="form-control" name="editDataName" id="editDataName">
            </div>
            <div class="mb-3">
              <label for="editDataAmount" class="form-label">Stock Amount</label>
              <input type="text" class="form-control" name="editDataAmount" id="editDataAmount">
            </div>
            <div class="mb-3">
              <label for="editDataExpire" class="form-label">Stock Expiration Date</label>
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
  <!-- <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
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
  </div> -->

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/triggerToast.js"></script>
  <script src="asset/js/deleteData.js"></script>

  <script>
    $(document).on('click', '.editBtn', function() {
      $('#editData').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#editID').val(data[1]);
      $('#editDataName').val(data[2]);
      $('#editDataAmount').val(data[4]);
      $('#editDataExpire').val(data[5]);
    });
  </script>


</body>

</html>
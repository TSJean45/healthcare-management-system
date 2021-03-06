<?php
session_start();
include 'connection.php';
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
        <div class="profile dropdown">
          <div>
            <?php
            $currentUser = $_SESSION['staffId'];
            $sql = "SELECT * FROM staff WHERE staffId ='$currentUser'";

            $result = mysqli_query($data, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $prefix = $row['staffPrefix'];
                $id = $row['staffId'];
                $imageStatus = $row['staffImage_status'];

                if ($imageStatus == 1) {
                  echo "<img src='upload/profile" . $prefix . $id . ".jpg'>";
                } else {
                  echo "<img src='asset/image/short-emp.jpg'>";
                }
              }
            }
            ?>
            <?php

            $currentUser = $_SESSION['staffId'];
            $sql = "SELECT * FROM staff WHERE staffId ='$currentUser'";

            $result = mysqli_query($data, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $staffName = $row['staffName'];

            ?>

                <span class="profile_name"><?php echo $staffName ?></span>

            <?php }
            } ?>
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
                    <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addData">
                      Add Medicine Stock
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <?php if (isset($_POST["addBtn"])) {
              $name = $_POST["inputDataName"];
              $qty = $_POST["inputDataAmount"];
              $expDate = $_POST["inputDataExpire"];

              $addSql = "INSERT INTO `medstock` (`stockName`,`stockQty`,`stockExpDate`) VALUES ('$name','$qty','$expDate')";
              $result = mysqli_query($data, $addSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    Stock is successfully added.</div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Stock is not added. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["editBtn"])) {
              $id = $_POST["editID"];
              $name = $_POST["editDataName"];
              $expDate = $_POST["editDataExpire"];

              $editSql = "UPDATE `medstock` SET `stockName`='$name',`stockExpDate`='$expDate' WHERE `stockID`='$id'";
              $result = mysqli_query($data, $editSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    Stock is successfully updated.</div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Stock is not updated. Please try again later.
                </div>';
              }
            }

            if (isset($_POST["subCal"])) {
              $id = $_POST["editID"];
              $qty = $_POST["editDataAmount"];
              $amount = $_POST["calAmount"];
              $total = $qty - $amount;

              $subSql = "UPDATE `medstock` SET `stockQty`='$total' WHERE `stockID`='$id'";
              $result = mysqli_query($data, $subSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    Stock is successfully subtracted.</div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Stock is not subtracted. Please try again later.
                </div>';
              }
            }

            if (isset($_POST['deleteBtn'])) {
              $id = $_POST["deleteID"];

              $deleteSql = "DELETE FROM `medstock` WHERE `stockID`=$id";
              $result = mysqli_query($data, $deleteSql);

              if ($result) {
                echo '<div class="alert alert-success" role="alert">
                    Stock is successfully deleted.</div>';
              } else {
                echo '<div class="alert alert-danger" role="alert">
                    Error! Stock is not deleted. Please try again later.
                </div>';
              }
            } ?>
            <div class="table-responsive">
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
                  $viewSql = "SELECT * FROM `medstock`";
                  $result = mysqli_query($data, $viewSql);
                  while ($fetch = mysqli_fetch_array($result)) {
                    $prefix = $fetch['prefix'];
                    $id = $fetch['stockID'];
                    $name = $fetch['stockName'];
                    $qty = $fetch['stockQty'];
                    $expDate = $fetch['stockExpDate'];
                    $currentDate = date("Y-m-d");
                    $per = ($qty / 2000) * 100;

                    if ($per <= 10) {
                      $color = "bg-danger";
                    } else if ($per > 10 && $per <= 60) {
                      $color = "bg-warning";
                    } else if ($per > 75) {
                      $color = "bg-success";
                    }

                    if ($expDate < $currentDate) {
                      $warning = "fas fa-exclamation-triangle";
                      $expired = "error";
                    } else {
                      $warning = "";
                      $expired = "";
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
                      <td class="expiration">
                        <?php echo $expDate; ?><i class="exp <?php echo $warning; ?>" style="color:rgba(150, 0, 0); margin-left: 10px;"></i></td>
                      <td class="action-button">
                        <button type="button" class="btn btn-info calBtn" data-toggle="modal" data-target="#<?php echo $expired; ?>calData<?php echo $id; ?>">
                          <i class="fas fa-calculator" style="color: black; font-size: 20px; padding: 5px;"></i></button>
                        <button type="button" class="btn btn-light editBtn" data-toggle="modal" data-target="#<?php echo $expired; ?>editData<?php echo $id; ?>">
                          <i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger deleteBtn" data-toggle="modal" data-target="#deleteData<?php echo $id; ?>">
                          <i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <!-- Calculate Modal -->
                    <div class="modal fade" id="calData<?php echo $id; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editData">Calculate Stock Amount</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="editID" value="<?php echo $id; ?>">
                                <label class="form-label">Stock ID</label><br>
                                <label><?php echo $prefix . "" . $id; ?></label>
                              </div>
                              <div class="mb-3">
                                <input type="hidden" name="editDataAmount" value="<?php echo $qty; ?>">
                                <label for="editDataAmount" class="form-label">Current Stock Amount</label><br>
                                <label><?php echo $qty; ?></label>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Calculate Stock Amount</label><br>
                                <input type="text" class="form-control" name="calAmount">
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="subCal">Subtract Amount</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Edit Data Modal -->
                    <div class="modal fade" id="editData<?php echo $id; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editData">Edit Stock Details</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="editID" value="<?php echo $id; ?>">
                              </div>
                              <div class="mb-3">
                                <?php
                                $searchSql = "SELECT * FROM `medicine`";
                                $search = mysqli_query($data, $searchSql); ?>
                                <label for="editDataName" class="form-label">Medicine Name</label>
                                <select id="editDataName" class="form-control select2me" name="editDataName">
                                  <?php while ($fetch = mysqli_fetch_array($search)) :; ?>
                                    <?php
                                    $mname = $fetch['medicineName']; ?>
                                    <option value="<?php echo $mname ?>" <?php if ($name == $mname) echo "selected"; ?>><?php echo $mname; ?></option>
                                  <?php endwhile; ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="editDataExpire" class="form-label">Stock Expiration Date</label>
                                <input type="date" class="form-control" name="editDataExpire" min="<?php echo date("Y-m-d"); ?>" value="<?php echo $expDate; ?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" name="editBtn">Update Changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Delete Data Modal -->
                    <div class="modal fade" id="deleteData<?php echo $id; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST">
                              <div class="mb-3">
                                <input type="hidden" name="deleteID" value="<?php echo $id; ?>">
                              </div>
                              <div class="mb-3">
                                Are you sure that you want to delete the selected data?
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="deleteBtn">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Expired Edit Modal -->
                    <div class="modal fade" id="erroreditData<?php echo $id; ?>" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Expired Stock</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Stock <b><?php echo $prefix . "" . $id; ?></b> is already expired. Unable to make any changes.
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Expired Calculate Modal -->
                    <div class="modal fade" id="errorcalData<?php echo $id; ?>" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Expired Stock</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Stock <b><?php echo $prefix . "" . $id; ?></b> is already expired. Unable to make any changes.
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
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
          <form action="" method="POST">
            <div class="mb-3">
              <?php
              $searchSql = "SELECT * FROM `medicine`";
              $search = mysqli_query($data, $searchSql); ?>
              <label for="inputDataName" class="form-label">Medicine Name</label>
              <select id="inputDataName" class="form-select select2me" name="inputDataName">
                <option value="">Select Medicine Name</option>
                <?php while ($fetch = mysqli_fetch_array($search)) :; ?>
                  <?php
                  $name = $fetch['medicineName']; ?>
                  <option value="<?php echo $name ?>"><?php echo $name; ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="inputDataAmount" class="form-label">Stock Amount</label>
              <input type="text" class="form-control" name="inputDataAmount" required>
            </div>
            <div class="mb-3">
              <label for="inputDataExpire" class="form-label">Stock Expiration Date</label>
              <input type="date" class="form-control" name="inputDataExpire" min="<?php echo date("Y-m-d"); ?>" required>
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

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>

</body>

</html>
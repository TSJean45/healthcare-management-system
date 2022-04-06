<?php
session_start();
include 'connection.php';

if (isset($_POST['deleteBtn'])) {
  $id = $_POST["deleteID"];

  $deleteSql = "DELETE FROM `contact` WHERE `msgID`=$id";
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
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>Contact Message</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'adminContact';
  include('asset/includes/adminSidebar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Contact</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
            <span class="profile_name"><?php echo $_SESSION['name']; ?></span>
          </div>
        </div>
      </div>
      </div>
    </nav>

    <div class="home-content adminList">
      <!-- Table -->
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <h4 class="card-title">Contact Message</h4>
            </div>
            <div class="table-responsive table-adminList">
              <?php
              $viewSql = "SELECT * FROM `contact`";
              $result = mysqli_query($data, $viewSql);
              ?>
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <th style="width: 10%;">Message ID </th>
                    <th class="d-none">ID</th>
                    <th style="width: 10%;"> Name </th>
                    <th style="width: 15%;">Email Address </th>
                    <th style="width: 20%;">Contact Subject</th>
                    <th style="width: 30%;">Contact Message</th>
                    <!-- <th>Date</th> -->
                    <th style="width: 10%;">Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $prefix = $row['msgPrefix'];
                      $id = $row['msgID'];
                      $name = $row['msgName'];
                      $email = $row['msgEmail'];
                      $subject = $row['msgSubject'];
                      $message = $row['msgMessage'];
                      $date = $row['msgDate'];
                  ?>
                      <tr>
                        <td><?php echo $prefix . "" . $id; ?></td>
                        <td class="d-none"><?php echo $id ?></td>
                        <td class="py-1"><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $subject; ?></td>
                        <td><?php echo $message; ?></td>
                        <!-- <td><?php echo $date; ?></td> -->
                        <td class="action-button">
                          <!-- <button type="button" class="btn btn-light viewBtn">
                            <i class="fas fa-eye"></i></button> -->
                          <a href="mailto:<?php echo $email; ?>">
                            <button type="button" class="btn btn-light">
                              <i class="fas fa-pen-alt"></i></button>
                          </a>
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

  <!-- Modal -->
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

    <?php include('asset/includes/jsCDN.php'); ?>

    <!-- Local JS -->
    <script src="asset/js/sidenavbar.js"></script>
    <script src="asset/js/deleteData.js"></script>
</body>

</html>
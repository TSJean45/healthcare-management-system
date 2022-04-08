<?php
    session_start();
    require_once('connection.php');
    $viewSql = "SELECT * FROM admin";
    $result=mysqli_query($data,$viewSql);

    
    if (isset($_POST["addBtn"])) {
    $name = $_POST["inputName"];
    $email = $_POST["inputEmail"];
    $pass = $_POST["inputPass"];

    $addSql = "INSERT INTO `admin` (`adminName`,`adminEmail`,`adminPassword`) VALUES ('$name','$email','$pass')";
    $result = mysqli_query($data, $addSql);
    echo "<meta http-equiv='refresh' content='0'>";

    if ($result) {
      echo '<script> alert("Data added"); </script>';
    } else {
      echo '<script> alert("Data not added"); </script>';
    }

    }

    // Delete Data
    if (isset($_POST['deleteBtn'])) {
    $id = $_POST["deleteID"];

    $deleteSql = "DELETE FROM `admin` WHERE `adminID`=$id";
    $result = mysqli_query($data, $deleteSql);
    echo "<meta http-equiv='refresh' content='0'>";

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

  <title>Admin</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'adminlist';
  include('asset/includes/adminSidebar.php'); ?>


  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Admin</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
            <img src="asset/image/profile1.jpg">
            <span class="profile_name"><?php echo $_SESSION['adminName']; ?></span>
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
            <h4 class="card-title">Admin List</h4>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    
                    <th> Admin Name </th>
                    <th> Admin ID </th>
                    <th> Admin Email Address </th>
                    <th> Action </th>
                  </tr>
                        </thead>
                        <tbody>
                        <?php
                         $viewSql = "SELECT * FROM admin";
                         $result=mysqli_query($data,$viewSql);
                         
                          if($result){
                            while($row = mysqli_fetch_assoc($result))
                            {
                              $prefix = $row['adminPrefix'];
                              $id = $row['adminId'];
                              $name = $row['adminName'];
                              $email = $row['adminEmail'];
                            
                        ?>     
                            <tr>
                                 
                                <td class="py-1">
                                    <?php echo $name ?>
                                </td>
                                <td><?php echo $prefix . "" . $id; ?></td>
                                <td>
                                  <?php echo $email ?>
                                </td>
                                <td class="action-button">
                                  <a href="adminViewAdminProfile.php">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                                      <i class="fas fa-eye"></i></button>
                                  </a>
                                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData<?php echo $id; ?>">
                                  <i class="fas fa-trash-alt"></i></button>
                              </td>
                            </tr>
                         
                <!-- Delete Modal -->
                  <div class="modal fade" id="deleteData<?php echo $id; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>         
                <?php } }
                         ?>
              </tbody>           
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="px-3">
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAdmin">
                    Add Authorised Admin
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

   <!-- Add -->
  <div class="modal fade" id="addAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAdminLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addAdmin">Add Authorised Admin</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" method="POST" name="addAdmin">
                <div class="mb-3">
                  <label for="inputName" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="inputName">
                </div>
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" name="inputEmail" value="@admin.jjj.com">
                </div>
                <div class="mb-3">
                  <label for="inputPass" class="form-label">Password</label>
                  <input type="password" class="form-control" name="inputPass">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" name="addBtn">Add</button>
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
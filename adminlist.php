<?php
    session_start();
    require_once('connection.php');
    $viewSql = "SELECT * FROM admin";
    $result=mysqli_query($data,$viewSql);

    
    if (isset($_POST["addBtn"])) {
    $name = $_POST["inputName"];
    $email = $_POST["inputEmail"];
    $pass = $_POST["inputPass"];

    $addSql = "INSERT INTO `admin` (`name`,`email`,`password`) VALUES ('$name','$email','$pass')";
    $result = mysqli_query($data, $addSql);
    }

    if (isset($_POST['deleteBtn'])) {
      $id = $_POST["deleteID"];
    
      $deleteSql = "DELETE FROM `admin` WHERE `id`=$id";
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
            <span class="profile_name"><?php echo $_SESSION['name']; ?></span>
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
                    <th> No</th>
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
                              $prefix = $row['prefix'];
                              $id = $row['id'];
                              $name = $row['name'];
                              $email = $row['email'];
                            
                        ?>     
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" data-bs-target="#deleteAdmin<?php echo $id; ?>" >
                                        <label class="form-check-label" for="flexCheckDefault">
                                        </label>
                                      </div>
                                </td>   
                                <td class="py-1">
                                    <?php echo $name ?>
                                </td>
                                <td><?php echo $prefix . "" . $id; ?></td>
                                <td>
                                  <?php echo $email ?>
                                </td>
                                <td class="action-button">
                                  <a href="adminViewAdminProfile.html">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewMessage">
                                      <i class="fas fa-eye"></i></button>
                                  </a>
                              </td>
                            </tr>
                         <?php } }
                         ?>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="px-3">
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAdmin">
                    Delete Authorised Admin
                  </button>
                </div>
                <div class="px-3">
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAdmin">
                    Add Authorised Admin
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
  <div class="modal fade" id="deleteAdmin" tabindex="-1" aria-labelledby="deleteAdminLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteAdminLabel">Confirmation Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST">
        <div class="mb-3">
              <input type="hidden" name="deleteID" id="deleteID">
          </div>
        <div class="modal-body">
          Are you sure that you want to delete the selected admin?
        </div>
        <div class="modal-footer">
          <button type="submit" name="deleteBtn" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

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
                  <input type="email" class="form-control" name="inputEmail">
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
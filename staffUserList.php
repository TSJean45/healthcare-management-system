<?php
session_start();
include 'connection.php';

//add data
if (isset($_POST["addBtn"])) {
  $name = $_POST["addName"];
  $email = $_POST["addEmail"];
  $pass = $_POST["addPassword"];

  $addSql = "INSERT INTO `user` (`userName`,`userEmail`,`userPassword`) VALUES ('$name','$email','$pass')";
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

  $deleteSql = "DELETE FROM `user` WHERE `userID`=$id";
  $result = mysqli_query($data, $deleteSql);
  echo "<meta http-equiv='refresh' content='0'>";

  if ($result) {
    echo '<script> alert("Data deleted"); </script>';
  } else {
    echo '<script> alert("Data not deleted"); </script>';
  }

  }

// edit data
if (isset($_POST['editBtn'])) {
  $id = $_POST["editId"];
  $name = $_POST["editName"];
  $email = $_POST["editEmail"];

  $editSql = "UPDATE `user` set `userName`='$name' , `userEmail`= '$email' WHERE `userID`=$id";
  $result = mysqli_query($data, $editSql);
  echo "<meta http-equiv='refresh' content='0'>";

  if ($result) {
    echo '<script> alert("Data updated"); </script>';
  } else {
    echo '<script> alert("Data not updated"); </script>';
  }

  }
?>
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
              <h4 class="card-title">User List</h4>
            </div>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <!-- <th> No</th> -->
                    <th> User Name </th>
                    <th> User ID </th>
                    <th> User Email Address </th>
                    <th>Date Joined</th>
                    <th> Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                         $viewSql = "SELECT * FROM user";
                         $result=mysqli_query($data,$viewSql);
                         
                          if($result){
                            while($row = mysqli_fetch_assoc($result))
                            {
                              $prefix = $row['userPrefix'];
                              $id = $row['userId'];
                              $name = $row['userName'];
                              $email = $row['userEmail'];
                              $date = $row['userDate_created'];
                            
                        ?>   
                            <tr>
                                <td class="py-1">
                                <?php echo $name ?>
                                </td>
                                <td><?php echo $prefix . "" . $id; ?></td>
                                <td>
                                  <?php echo $email ?>
                                </td>
                                <td><?php echo $date ?></td>
                                <td class="action-button">
                                  <button type="button" class="btn btn-light">
                                    <a href="adminUserProfile.html">
                                    <i class="fas fa-eye"></i></a></button>
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editUser<?php echo $id; ?>">
                                    <i class="fas fa-edit"></i></button>
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

  <!-- edit modal-->
  <div class="modal fade" id="editUser<?php echo $id; ?>" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUser">Edit User Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="inputStockID" class="form-label">User Name</label>
              <input type="text" class="form-control" id="inputID" name="editName" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" id="inputID" name="editId" value="<?php echo $id; ?>">
            </div>
            <div class="mb-3">
              <label for="inputStockName" class="form-label">User Email</label>
              <input type="email" class="form-control" id="inputName" name="editEmail" value="<?php echo $email; ?>">
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="editBtn">Save Changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- add modal -->
  <div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUser">Add User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="inputName" class="form-label">User Name</label>
              <input type="text" class="form-control" id="inputName" name="addName">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">User Email</label>
              <input type="email" class="form-control" id="inputEmail" name="addEmail">
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">User Password</label>
              <input type="password" class="form-control" id="inputPass" name="addPassword">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="addBtn" >Add</button>
        </div>
      </form>
      </div>
    </div>
  </div>          
                
                <?php } }?>
                </tbody>
              </table>
              <div class="d-flex flex-row-reverse">
                <div class="mx-1">
                  <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addUser">
                    Add User
                  </button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/triggerToast.js"></script>
  <script src="asset/js/deleteData.js"></script>

</body>

</html>
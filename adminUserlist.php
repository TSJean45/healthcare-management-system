<?php
    session_start();
    require_once('connection.php');
    $viewSql = "SELECT * FROM admin";
    $result=mysqli_query($data,$viewSql);

    //add data
    if (isset($_POST["addBtn"])) {
      $name = $_POST["addName"];
      $email = $_POST["addEmail"];
      $pass = $_POST["addPassword"];
  
      $addSql = "INSERT INTO `user` (`userName`,`userEmail`,`userPassword`) VALUES ('$name','$email','$pass')";
      $result = mysqli_query($data, $addSql);
      
      if ($result) {
        $msg =  '<div class="alert alert-success" role="alert">
          A new Patient has been added.</div>';
      } else {
        $msg =  '<div class="alert alert-danger" role="alert">
                  Something went wrong. Please try again.</div>';
      }
    }

    // Delete Data
    if (isset($_POST['deleteBtn'])) {
      $id = $_POST["deleteID"];
  
      $deleteSql = "DELETE FROM `user` WHERE `userID`=$id";
      $result = mysqli_query($data, $deleteSql);
      
  
      if ($result) {
        $msg =  '<div class="alert alert-success" role="alert">
          The selected Patient has been deleted.</div>';
      } else {
        $msg =  '<div class="alert alert-danger" role="alert">
                  Something went wrong. Please try again.</div>';
      }
  
      }
    
    //edit data
    if (isset($_POST['editBtn'])) {
      $id = $_POST["editId"];
      $name = $_POST["editName"];
      $email = $_POST["editEmail"];
  
      $editSql = "UPDATE `user` set `userName`='$name' , `userEmail`= '$email' WHERE `userId` = $id";
      $result = mysqli_query($data, $editSql);
      
  
      if ($result) {
        $msg =  '<div class="alert alert-success" role="alert">
          The selected Patient has been edited.</div>';
      } else {
        $msg =  '<div class="alert alert-danger" role="alert">
                  Something went wrong. Please try again.</div>';
      }
  
      }

?>
<!DOCTYPE html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/adminstyle.css">
  <link rel="stylesheet" href="asset/css/navbar.css">

  <?php include('asset/includes/cssCDN.php'); ?>

  <title>User</title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

  <!-- Side Bar -->
  <?php $page = 'adminUserlist';
  include('asset/includes/adminSidebar.php'); ?>

  <section class="home-section">
    <!-- Top Bar-->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Patient</span>
      </div>
      <div class="right-nav">
        <div class="right noti-bell my-auto">
          <i class='bx bxs-bell-ring'></i>
        </div>

        <div class="profile dropdown">
          <div>
          <?php 
          $currentUser = $_SESSION['adminId'];
          $sql = "SELECT * FROM admin WHERE adminId ='$currentUser'";

          $result=mysqli_query($data,$sql);

          if($result){
            while($row = mysqli_fetch_assoc($result)){
                $prefix = $row['adminPrefix'];
                $id = $row['adminId'];
                $imageStatus = $row['adminImage_status'];
                
                if($imageStatus == 1)
                {
                  echo "<img src='upload/profile".$prefix.$id.".jpg'>";
                }
                else{
                  echo "<img src='asset/image/short-emp.jpg'>";
                }
              }
            }
          ?>
            <?php 

            $currentUser = $_SESSION['adminId'];
            $sql = "SELECT * FROM admin WHERE adminId ='$currentUser'";
  
            $result=mysqli_query($data,$sql);
  
            if($result){
              while($row = mysqli_fetch_assoc($result)){
                  $adminName = $row['adminName'];
                  
            ?>

            <span class="profile_name"><?php echo $adminName ?></span>
            <?php  } } ?>
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
          <div class="row mb-2">
              <div class="col-lg-5">
                <h4 class="card-title">Patient List</h4>
              </div>
              <div class="col-lg-7">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-1">
                    <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addUser">
                     Add Patient
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <?php
            if(isset($msg))
				    {
				     echo $msg;
				    }
			      ?>
            <div class="table-responsive table-adminList">
              <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                <thead>
                  <tr>
                    <!-- <th> No</th> -->
                    <th> Patient Name </th>
                    <th> Patient ID </th>
                    <th> Patient Email Address </th>
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
                              $birthdate = $row['userBirthdate'];
                              $number = $row['userPhone_number'];
                              $gender = $row['userGender'];
                              $address = $row['userAddress'];
                            
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
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#viewProfile<?php echo $id; ?>">
                                    <i class="fas fa-eye"></i></button>
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
          <h5 class="modal-title" id="editUser">Edit Patient Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="inputStockID" class="form-label">Patient Name</label>
              <input type="text" class="form-control" id="inputID" name="editName" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" id="inputID" name="editId" value="<?php echo $id; ?>">
            </div>
            <div class="mb-3">
              <label for="inputStockName" class="form-label">Patient Email</label>
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
          <h5 class="modal-title" id="addUser">Add Patient</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="inputName" class="form-label">Patient Name</label>
              <input type="text" class="form-control" id="inputName" name="addName" required>
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">Patient Email</label>
              <input type="email" class="form-control" id="inputEmail" name="addEmail" required> 
            </div>
            <div class="mb-3">
              <label for="inputID" class="form-label">Patient Password</label>
              <input type="password" class="form-control" id="inputPass" name="addPassword" required>
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
  
  <!-- View Modal  -->
  <div class="modal fade" id="viewProfile<?php echo $id; ?>"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewProfile">View Patient Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="viewName" class="form-label"> Name</label>
              <input type="text" class="form-control"  value="<?php echo $name; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewEmail" class="form-label">Email</label>
              <input type="text" class="form-control"  value="<?php echo $email; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewNumber" class="form-label">Phone Number</label>
              <input type="text" class="form-control" value="<?php echo $number; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewBirthdate" class="form-label">Birthdate</label>
              <input type="text" class="form-control" value="<?php echo $birthdate; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewAddress" class="form-label">Address</label>
              <input type="text" class="form-control" value="<?php echo $address; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="viewGender" class="form-label">Gender</label>
              <input type="text" class="form-control" value="<?php echo $gender; ?>" readonly>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>      

                <?php } }?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  


  <?php include('asset/includes/jsCDN.php'); ?>

  <!-- Local JS -->
  <script src="asset/js/sidenavbar.js"></script>
  <script src="asset/js/deleteData.js"></script>
</body>

</html>
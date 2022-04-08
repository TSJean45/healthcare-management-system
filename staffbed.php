<?php
session_start();
include 'connection.php';

if (isset($_POST["addBtn"])) {
    $location = $_POST["inputLocation"] ?? "";
    $depart = $_POST["inputDepartment"] ?? "";
    $status = $_POST["inputBedStatus"] ?? "";
    $userID = $_POST["inputUserID"] ?? "";

    $addSql = "INSERT INTO `bed` (`bedLocation`,`bedDepartment`,`bedStatus`,`userID`) VALUES ('$location','$depart','$status', '$userID')";
    $result = mysqli_query($data, $addSql);

    if ($result) {
        echo '<script> alert("Data added"); </script>';
    } else {
        echo '<script> alert("Data not added"); </script>';
    }
}

if (isset($_POST["editBtn"])) {
    $id = $_POST["editID"];
    $location = $_POST["editLocation"] ?? "";
    $depart = $_POST["editDepartment"] ?? "";
    $status = $_POST["editBedStatus"] ?? "";
    $userID = $_POST["editUserID"] ?? "";

    $editSql = "UPDATE `bed` SET `bedLocation`='$location',`bedDepartment`='$depart',`bedStatus`='$status',`userID`='$userID' WHERE `bedID`='$id'";
    $result = mysqli_query($data, $editSql);

    if ($result) {
        echo '<script> alert("Data updated"); </script>';
    } else {
        echo '<script> alert("Data not updated"); </script>';
    }
}

if (isset($_POST['deleteBtn'])) {
    $id = $_POST["deleteID"];

    $deleteSql = "DELETE FROM `bed` WHERE `bedID`=$id";
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
    <link rel="stylesheet" href="asset/css/staffstyle.css">
    <link rel="stylesheet" href="asset/css/navbar.css">

    <?php include('asset/includes/cssCDN.php'); ?>

    <title>Bed</title>
    <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

    <!-- Side Bar -->
    <?php $page = 'staffbed';
    include('asset/includes/staffSideBar.php'); ?>

    <section class="home-section">
        <!-- Top Bar-->
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Bed</span>
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

        <div class="home-content">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row mt-2 mx-2">
                        <div class="col-lg-5">
                            <h4 class="card-title">Bed</h4>
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
                                        Add Bed
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-wardStatus">
                            <table class="table table-hover table-condensed" id="dataTableID" style="width:100%">
                                <thead>
                                    <th> Bed ID</th>
                                    <th> Location </th>
                                    <th> Department </th>
                                    <th> Bed Status </th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $viewSql = "SELECT * FROM `bed` INNER JOIN `user` on bed.userID = user.userId";
                                    $result = mysqli_query($data, $viewSql);
                                    while ($fetch = mysqli_fetch_array($result)) {
                                        $prefix = $fetch['bedPrefix'];
                                        $id = $fetch['bedID'];
                                        $location = $fetch['bedLocation'];
                                        $depart = $fetch['bedDepartment'];
                                        $status = $fetch['bedStatus'];
                                        $uid = $fetch['userID'];
                                        $uname = $fetch['userName'];
                                        $status = $fetch['bedStatus'];

                                        if ($status == "Empty") {
                                            $color = "btn-secondary";
                                            $uname = "-";
                                        } else if ($status == "Occupied") {
                                            $color = "btn-success";
                                        } else if ($status == "Cleaning") {
                                            $color = "btn-warning";
                                            $uname = "-";
                                        }
                                    ?>
                                        <tr>
                                            <td><?php echo $prefix . "" . $id; ?></td>
                                            <td><?php echo $location ?></td>
                                            <td><?php echo $depart ?></td>
                                            <td><button type="button" class="btn <?php echo $color ?>"><?php echo $status ?></button></td>
                                            <td><?php echo $uname ?></td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editData<?php echo $id; ?>">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData<?php echo $id; ?>">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Edit Data Modal -->
                                        <div class="modal fade edit" id="editData<?php echo $id; ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editBed">Edit Bed</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="POST">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="editID" value="<?php echo $id; ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="editLocation" class="form-label">Location</label>
                                                                <input type="text" class="form-control" name="editLocation" required value="<?php echo $location; ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="editDepartment" class="form-label">Department</label>
                                                                <select id="editDepartment" class="form-select" name="editDepartment" value="<?php echo $depart; ?>">
                                                                    <option value="Podiatrist" <?php if ($depart == "Podiatrist") echo "selected"; ?>>Podiatrist</option>
                                                                    <option value="Pediatrician" <?php if ($depart == "Pediatrician") echo "selected"; ?>>Pediatrician</option>
                                                                    <option value="Endocrinologist" <?php if ($depart == "Endocrinologist") echo "selected"; ?>>Endocrinologist</option>
                                                                    <option value="Neurologist" <?php if ($depart == "Neurologist") echo "selected"; ?>>Neurologist</option>
                                                                    <option value="Rheumatologist" <?php if ($depart == "Rheumatologist") echo "selected"; ?>>Rheumatologist</option>
                                                                    <option value="Immunologist" <?php if ($depart == "Immunologist") echo "selected"; ?>>Immunologist</option>
                                                                    <option value="Phychiatrist" <?php if ($depart == "Phychiatrist") echo "selected"; ?>>Phychiatrist</option>
                                                                    <option value="Cardiologist" <?php if ($depart == "Cardiologist") echo "selected"; ?>>Cardiologist</option>
                                                                    <option value="Hepatologist" <?php if ($depart == "Hepatologist") echo "selected"; ?>>Hepatologist</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="editBedStatus" class="form-label">Bed Status</label>
                                                                <select id="edittBedStatus" class="form-select" name="editBedStatus">
                                                                    <option value="Empty" <?php if ($status == "Empty") echo "selected"; ?>>Empty</option>
                                                                    <option value="Occupied" <?php if ($status == "Occupied") echo "selected"; ?>>Occupied</option>
                                                                    <option value="Cleaning" <?php if ($status == "Cleaning") echo "selected"; ?>>Cleaning</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <?php
                                                                $searchSql = "SELECT * FROM `user`";
                                                                $search = mysqli_query($data, $searchSql); ?>
                                                                <label for="editUserID" class="form-label">User Name</label>
                                                                <select id="editUserID" class="form-control select2me" name="editUserID" title="Select User">
                                                                    <?php while ($fetch = mysqli_fetch_array($search)) :; ?>
                                                                        <?php $uid = $fetch['userId'];
                                                                        $uprefix = $fetch['userPrefix'];
                                                                        $name = $fetch['userName']; ?>
                                                                        <option value="<?php echo $uid ?>" <?php if ($uname == $name) echo "selected"; ?>><?php echo $uprefix . "" . $uid . " - " . $name; ?></option>
                                                                    <?php endwhile; ?>
                                                                </select>
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
                                        <!-- Delete Data Modal -->
                                        <div class="modal fade" id="deleteData<?php echo $id; ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteDataLabel">Confirmation Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success" name="deleteBtn">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add Stock -->
    <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addData">Add Bed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="inputLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" name="inputLocation" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label">Department</label>
                            <select id="inputDepartment" class="form-select" name="inputDepartment">
                                <option value="Podiatrist">Podiatrist</option>
                                <option value="Pediatrician">Pediatrician</option>
                                <option value="Endocrinologist">Endocrinologist</option>
                                <option value="Neurologist">Neurologist</option>
                                <option value="Rheumatologist">Rheumatologist</option>
                                <option value="Immunologist">Immunologist</option>
                                <option value="Phychiatrist">Phychiatrist</option>
                                <option value="Cardiologist">Cardiologist</option>
                                <option value="Hepatologist">Hepatologist</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputBedStatus" class="form-label">Bed Status</label>
                            <select id="inputBedStatus" class="form-select" name="inputBedStatus">
                                <option value="Empty">Empty</option>
                                <option value="Occupied">Occupied</option>
                                <option value="Cleaning">Cleaning</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <?php
                            $searchSql = "SELECT * FROM `user`";
                            $search = mysqli_query($data, $searchSql); ?>
                            <label for="inputUserID" class="form-label">User Name</label>
                            <select id="inputUserID" class="form-select select2me" name="inputUserID">
                                <option value="">Select User</option>
                                <?php while ($fetch = mysqli_fetch_array($search)) :; ?>
                                    <?php $id = $fetch['userId'];
                                    $prefix = $fetch['userPrefix'];
                                    $name = $fetch['userName']; ?>
                                    <option value="<?php echo $id ?>"><?php echo $prefix . "" . $id . " - " . $name; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="addBtn">Add Bed</button>
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
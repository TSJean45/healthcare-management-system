<?php
session_start();

include 'connection.php';

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="asset/css/userstyle.css?v=<?php echo time(); ?>">
  <?php include('asset/includes/cssCDN.php'); ?>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
  <title>My Medical Record</title>
</head>

<body>
  <!-- Header -->
  <?php include('asset/includes/navBar.php'); ?>
  <!-- Header -->

  <section class="container">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            My Medical Record
          </h4>

          <div class="table-responsive">
            <table class="table table-hover table-bordered table-condensed" id="dataTableID" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Record ID</th>
                  <th scope="col">Medical Staff</th>
                  <th scope="col">Date Admitted</th>
                  <th scope="col">Disease</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $viewSql = "SELECT * FROM `medrec` INNER JOIN  `user` ON  medrec.userID = user.userId
               INNER JOIN `staff`  ON  medrec.staffID=staff.staffId";
                $result = mysqli_query($data, $viewSql);
                while ($row = mysqli_fetch_array($result)) {
                  $rpre = $row['recPrefix'];
                  $rid = $row['recID'];
                  $uid = $row['userID'];
                  $uname = $row['userName'];
                  $upre = $row['userPrefix'];
                  $sname = $row['staffName'];
                  $dis = $row['recDisease'];
                  $date = $row['recDate'];
                  $status = $row['recStatus'];

                  if ($status == "New") {
                    $color = "btn-info";
                    $logo = "fa-check-circle";
                  } else if ($status == "In Treatment") {
                    $color = "btn-danger";
                    $logo = "fa-heartbeat";
                  } else if ($status == "Recovered") {
                    $color = "btn-success";
                    $logo = "fa-check-circle";
                  }

                ?>
                  <tr>
                    <td><?php echo $rpre . "" . $rid; ?></td>
                    <td><?php echo $sname; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $dis; ?></td>
                    <td>
                      <button type="button" class="btn <?php echo $color; ?>">
                        <i class="fas <?php echo $logo; ?>"><?php echo $status; ?></i>
                      </button>
                    </td>
                  </tr>
                <?php  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Footer -->
  <?php include('asset/includes/footer.php'); ?>
  <?php include('asset/includes/jsCDN.php'); ?>
</body>

</html>
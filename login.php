<?php

session_start();


require_once('connection.php');


//login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = $_POST["Email"];
  $password = $_POST["Password"];
  
  


  if (!empty($email) && !empty($password)) {
    $adminSql = "SELECT * FROM `admin` where adminEmail = '" . $email . "' AND adminPassword= '" . $password . "'";
    $adminResult = mysqli_query($data, $adminSql);

    $userSql = "SELECT * FROM `user` where userEmail = '" . $email . "' AND userPassword= '" . $password . "'";
    $userResult = mysqli_query($data, $userSql);

    $staffSql = "SELECT * FROM `staff` where staffEmail = '" . $email . "' AND staffPassword= '" . $password . "'";
    $staffResult = mysqli_query($data, $staffSql);

    $Arow = mysqli_fetch_array($adminResult);
    $Urow = mysqli_fetch_array($userResult);
    $Srow = mysqli_fetch_array($staffResult);
    $msg = ' ';


    if ($Urow["userPrefix"] == "U") {
      $_SESSION['userName'] = $Urow['userName'];
      $_SESSION['userId'] = $Urow['userId'];
      header("location:index.php");
    } else if ($Arow["adminUsertype"] == "admin") {
      $_SESSION['adminName'] = $Arow['adminName'];
      $_SESSION['adminId'] = $Arow['adminId'];
      header("location:admindashboard.php");
    } else if ($Srow["staffPrefix"] == "S") {
      $_SESSION['staffName'] = $Srow['staffName'];
      $_SESSION['staffId'] = $Srow['staffId'];
      header("location:staffdashboard.php");
    } 
    else 
    {
       $msg = '<div class="alert alert-danger" role="alert">
                 Username or Password Incorrect.</div>';
      
    }
  } else {
      $msg =  '<div class="alert alert-danger" role="alert">
      Please fill in the details.</div>';
  }
  }
  
  //end



?>

<!DOCTYPE html>
<html>

<head>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/main.css">
  <link rel="stylesheet" href="asset/css/header.css">
  <link rel="stylesheet" href="asset/css/footer.css">
  <link rel="stylesheet" href="asset/css/login.css">
  <title> Login </title>
  <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
  <?php include('asset/includes/cssCDN.php'); ?>
</head>

<body>
  <?php include('asset/includes/navBar.php'); ?>

  
  <div class="login-page">
    <div class="form">
      <div class="login">
        <div class="login-header">
          <h3> JJJ E-Healthcare</h3>
          <h2>LOGIN</h2>
          <p>Please enter your credentials to login.</p>
          <?php 
             if(isset($msg))
             {
               echo $msg;
             }
          ?>
          
        </div>
      </div>
      <form class="login-form" method="POST">
        <input type="text" name="Email" placeholder="Email" />
        <input type="password" name="Password" placeholder="password" />
        <button>login</button>
        <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
      </form>
    </div>
  </div>

  <!--Footer -->
  <?php include('asset/includes/footer.php'); ?>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="asset/js/scrollTop.js"></script>
</body>

</html>
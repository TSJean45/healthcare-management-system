<?php 

session_start();


require_once('connection.php');


//register
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=($_POST['Name']);
$email=($_POST['Email']);
$password=($_POST['Password']); 
$cpassword=($_POST['CPassword']);

if(!empty($email)&&!empty($password)&&!empty($name)&&!empty($cpassword))
	{
		$sql_u = "SELECT * FROM user WHERE userName='$name'";
  		$sql_e = "SELECT * FROM user WHERE userEmail='$email'";
		$res_u = mysqli_query($data, $sql_u);
  		$res_e = mysqli_query($data, $sql_e);

		  if (mysqli_num_rows($res_u) > 0) 
		  {
			$msg =  '<div class="alert alert-danger" role="alert">
			Name taken, return.</div>';
			
		  }
		  else if(mysqli_num_rows($res_e) > 0)
		  {
			$msg =  '<div class="alert alert-danger" role="alert">
			Email taken, return.</div>';
		  }
		  else
		  {
			if($password == $cpassword)
			{
				$sql = "insert into user (userName, userEmail, userPassword) values ('$name','$email','$password')";
				
				$r = mysqli_query($data,$sql);
				
				$msg =  '<div class="alert alert-success" role="alert">
							Register successfully, heading to login. </div>';
	
				header( "refresh:2;url=login.php" );
	
				if(!$r){
					$msg =  '<div class="alert alert-danger" role="alert">
					Error.</div>';
				}
			}
			else{
				$msg =  '<div class="alert alert-danger" role="alert">
				Password does not matched.</div>';
			}
		  }
		}
		else{
			$msg =  '<div class="alert alert-danger" role="alert">
			Please fill in the required information.</div>';
			
		}
	}	


?>

<!DOCTYPE html>
<html>
<head>
<!-- Local CSS File -->
<link rel="stylesheet" href="asset/css/main.css">
<link rel="stylesheet" href="asset/css/header.css">
<link rel="stylesheet" href="asset/css/footer.css">	
<link rel="stylesheet" href="asset/css/login.css">
<title> Register </title>
<?php include('asset/includes/cssCDN.php'); ?>
<link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>
<?php include('asset/includes/navBar.php'); ?>
  
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
		  	<h3> JJJ E-Healthcare</h3>
            <h2>Register</h2>
            <p>Please enter your credentials to sign up.</p>
			<?php
				if(isset($msg))
				{
				  echo $msg;
				}
			 
			?>
			
          </div>
        </div>
        <form class="login-form" method="POST">
          <input type="text" name="Name" placeholder="Fullname"/>
          <input type="email" name="Email" placeholder="Email"/>
          <input type="password" name="Password" placeholder="Password"/>
          <input type="password" name="CPassword" placeholder="Comfirm password"/>
          <button>login</button>
          <p class="message">Registered? <a href="login.php">Login Here</a></p>
        </form>
      </div>
    </div>

	<?php include('asset/includes/footer.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>



</body>
</html>


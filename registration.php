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
			echo "<script type='text/javascript'>alert('name taken, return');</script>";
			
		  }
		  else if(mysqli_num_rows($res_e) > 0)
		  {
			echo "<script type='text/javascript'>alert('email taken, return');</script>";
			
		  }
		  else
		  {
			if($password == $cpassword)
			{
				$sql = "insert into user (userName, userEmail, userPassword) values ('$name','$email','$password')";
				
				$r = mysqli_query($data,$sql);
				
				echo "<script type='text/javascript'>alert('register successfully, Heading to login in 5 secs');</script>";
	
				header( "refresh:3;url=login.php" );
	
				if(!$r){
					echo"<p align=center>Error</p>";
					echo "<script type='text/javascript'>alert('Error');</script>";
				}
			}
			else{
				echo "<script type='text/javascript'>alert('Password does not matched');</script>";
			}
		  }
		}
		else{
			echo "<script type='text/javascript'>alert('Please fill in the required information');</script>";
			
		}
	}	

?>

<!DOCTYPE html>
  <!-- Local CSS File -->
  <link rel="stylesheet" href="asset/css/main.css">
<link rel="stylesheet" href="asset/css/header.css">
<link rel="stylesheet" href="asset/css/footer.css">
<link rel="stylesheet" href="asset/css/login.css">
<title> Login </title>
<?php include('asset/includes/cssCDN.php'); ?>
</head>
<body>
<?php include('asset/includes/navBar.php'); ?>
  
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
		  	<h3> JJJ E-Healtcare</h3>
            <h2>Register</h2>
            <p>Please enter your credentials to sign up.</p>
			
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


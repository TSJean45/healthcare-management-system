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
		$sql_u = "SELECT * FROM login WHERE name='$name'";
  		$sql_e = "SELECT * FROM login WHERE email='$email'";
		$res_u = mysqli_query($data, $sql_u);
  		$res_e = mysqli_query($data, $sql_e);

		  if (mysqli_num_rows($res_u) > 0) 
		  {
			echo" <p align=center>name taken, return</p>";
			// echo" <p align=center></p>";
			
		  }
		  else if(mysqli_num_rows($res_e) > 0)
		  {
			echo" <p align=center>email taken, return</p>";
		  }
		  else
		  {
			if($password == $cpassword)
			{
				$sql = "insert into login (name, email, password) values ('$name','$email','$password')";
				
				$r = mysqli_query($data,$sql);
				
				echo" <p align=center>register successfully, Heading to login in 5 secs</p>";
	
				header( "refresh:5;url=login.php" );
	
				if(!$r){
					echo"<p align=center>Error</p>";
				}
			}
			else{
				echo"<p align=center>Password not Matched.</p>";
			}

		  }
		}
		else{
			echo"<p align=center>Please fill in the required information</p>";
		}
	}	

?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/logreg.css">

    </head>
<body>
	
    <h2>JJJ E-healthcare </h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#reg" method="POST">
			<h1>Create Account</h1>
			<input type="text" name="Name" placeholder="Fullname"/>
			<input type="email" name="Email" placeholder="Email" />
			<input type="password" name="Password" placeholder="Password"/>
			<input type="password" name="CPassword" placeholder="Comfirm Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container" href="#login">
		<form action="#" method="POST">
			<h1>Sign in</h1>
			<input type="email" name="Email" placeholder="Email"/>
			<input type="password" name="Password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello There !</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="asset/js/logreg.js"></script>

    </body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="asset/css/login.css">
<title> Login </title>
</head>

<body>
  
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
          <input type="text" name="Email" placeholder="Email"/>
          <input type="password" name="Password" placeholder="Password"/>
          <input type="password" name="CPassword" placeholder="Comfirm password"/>
          <button>login</button>
          <p class="message">registered? <a href="login.php">Login Here</a></p>
        </form>
      </div>
    </div>

</body>
</html>


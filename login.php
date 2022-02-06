<?php


require_once('connection.php');

//login
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$username=$_POST["Email"];
	$password=$_POST["Password"]; 
	

    $sql="select * from login where username = '".$username. "' AND password= '".$password. "' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {
        header("location:index.html");
    }
    else if($row["usertype"]=="admin")
    {
        header("location:admindashboard.html");
    }
    else if($row["usertype"]=="staff")
    {
        header("location:staffdashboard.html");
    }
    else{
        echo "Username or Password Incorrect";
    }
//end
}
?>









<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/logreg.css">

    </head>
<body>
	
    <h2>JJJ E-healthcare </h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="registration.php" method="POST">
			<h1>Create Account</h1>
			<!-- <input type="text" name="Name" /> -->
			<input type="email" name="Email" />
			<input type="password" name="Password" />
			<input type="password" name="CPassword" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container" href="#login">
		<form action="#" method="POST">
			<h1>Sign in</h1>
			<input type="email" name="Email" />
			<input type="password" name="Password" />
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
</html>
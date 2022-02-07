<?php

session_start();


require_once('connection.php');


//login
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$email=$_POST["Email"];
	$password=$_POST["Password"]; 
	
	if(!empty($email)&&!empty($password))
	{

	
    $sql="select * from login where email = '".$email. "' AND password= '".$password. "' ";

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
        echo "<p align=center>Username or Password Incorrect</p>";
    }
	}
	else{
		echo" <p align=center>Please fill in the require form </p>";
	}
//end


}
?>

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
            <h2>LOGIN</h2>
            <p>Please enter your credentials to login.</p>
			
          </div>
        </div>
        <form class="login-form" method="POST">
          <input type="text" name="Email" placeholder="Email"/>
          <input type="password" name="Password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
        </form>
      </div>
    </div>

</body>
</html>
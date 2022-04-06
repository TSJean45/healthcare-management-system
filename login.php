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
    $sql="select name,email,password,usertype from staff where email = '".$email. "' AND password= '".$password. "'  
          UNION select name,email,password,usertype  from user where email = '".$email. "' AND password= '".$password. "' 
          UNION select name,email,password,usertype  from admin where email = '".$email. "' AND password= '".$password. "'" ;

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {
        $_SESSION['name'] = $row['name'];
        
        header("location:index.php");
    }
    else if($row["usertype"]=="admin")
    {
        $_SESSION['name'] = $row['name'];
        
        header("location:admindashboard.php");
    }
    else if($row["usertype"]=="staff")
    {
        $_SESSION['name'] = $row['name'];
        
        header("location:staffdashboard.php");
    }
    else{
      echo "<script type='text/javascript'>alert('Username or Password Incorrect ');</script>";
    }
	}
	else{
      echo "<script type='text/javascript'>alert('Please fill in the details');</script>";
	
	}
//end


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
<title> Login </title>
<?php include('asset/includes/cssCDN.php'); ?>
</head>
<?php include('asset/includes/navBar.php'); ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="asset/js/scrollTop.js"></script>
</body>
</html>
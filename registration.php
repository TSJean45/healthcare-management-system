<?php


require_once('connection.php');

// $name = $_POST["Name"];
$username=$_POST["Email"];
$password=$_POST["Password"]; 
$cpassword=$_POST["CPassword"];


if($password == $cpassword)
{
	$sql = "INSERT INTO login (email, password)
			VALUES ('$username','$password')";
	$result = mysqli_query($data, $sql);

	if(!$result){      //error here
		echo"Error!";
	}
	else{
		echo"yes";
	}
}
else{
	echo"Password not Matched.";
}
?>
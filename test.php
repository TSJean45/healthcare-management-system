<!doctype html>
<html>
<head>

<?php 
            session_start();
                include 'connection.php';
                
              echo "welcome"  . $_SESSION["name"];
              
?>
<a class="dropdown-item" href="logout.php">Log Out</a>
</head>
</html>

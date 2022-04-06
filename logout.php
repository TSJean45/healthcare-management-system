<?php
session_start();
header("location:index.php");
unset($_SESSION["name"]);
session_destroy();

die();

?>
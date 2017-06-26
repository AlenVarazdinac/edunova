<?php include_once '../config.php';  

session_destroy();
header("location: " . $path . "public/login.php?loggedout");
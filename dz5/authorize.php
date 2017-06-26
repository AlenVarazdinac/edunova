<?php
include_once 'config.php';
if(!isset($_POST["username"]) || !isset($_POST["username"])){
	header("location: " . $path . "index.php");
}

//kasije će doći spajanje na bazu
if($_POST["username"]=="alen" && $_POST["password"]=="a"){
	$_SESSION["logged"]=$_POST["username"];
	header("location: " . $path . "private/dashboard.php");
}else{
	//nisi logiran
	header("location: " . $path . "public/login.php?failed&username=" . $_POST["username"]);
}

?>

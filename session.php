<?php
session_start();
if(!isset($_SESSION["E_id"])){
	header("Location:home.php");
	exit();
}
?>
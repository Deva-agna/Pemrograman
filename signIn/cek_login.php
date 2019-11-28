<?php 
session_start();

if(empty($_SESSION["session_username"])){
	header("Location: ../signIn/index.php");
}
?>
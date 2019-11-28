<?php 
session_start();
include "config.php";

$email = $_POST["email"];
$password = $_POST["password"];

//echo "username = ".$username." --- password = ".$password;

$sql = "select * from member where email = '$email' and password = '$password'";
$query = mysqli_query($con, $sql);
$jml = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);

/*while($row = mysqli_fetch_array($query)){
	
}*/

if($row["email"] == $email and $password == $row["password"] ){
	$_SESSION["session_username"] = $row["nama_member"];
	$_SESSION["session_password"] = $row["password"];
	$_SESSION["session_email"] = $row["email"];
	header("Location: ../boking/index.php");
}else{
	header("Location: index.php");
}
?>
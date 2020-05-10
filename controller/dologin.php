<?php 
session_start();

include 'doconnect.php';


$username = $_POST["Username"];
$password = $_POST["Password"];


$sql = "SELECT * FROM tbl_user WHERE `user_name` = '".$username."' and user_password =  
'".$password."'";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);

if($num_rows > 0){
	$_SESSION["username"] = $username ;
	header('Location: ../home.php');
}else{
	header('Location: ../index.php?err=Username atau Password Salah');
}

?>
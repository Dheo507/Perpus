<?php 

include 'doconnect.php';

$username = $_POST["Username"];
$email = $_POST["Email"];
$address = $_POST["Address"];
$phone = $_POST["Phone"];
$password = $_POST["Password"];
$confpass = $_POST["confpass"];

if(strpos($email,"@") == null){
	header('Location: ../register.php?err=Email Harus Mengandung Kata @');
}

if($password != $confpass){
	header('Location: ../register.php?err=Confirm Password Tidak Sama Dgn Password');
}


$sqls = "SELECT * FROM tbl_user WHERE `user_name` = '".$username."'";
$result = mysqli_query($conn, $sqls);
$num_rows = mysqli_num_rows($result);

if($num_rows > 0 ){
	header('Location: ../register.php?err=Username Telah Digunakan');
}else{
	$sql = "INSERT INTO tbl_user (user_name, user_email, user_address, user_phone, user_password, user_verifikasi)
VALUES ('".$username."', '".$email."', '".$address."', '".$phone."', '".$password."',0)";

if (mysqli_query($conn, $sql)) {
  header('Location: ../index.php?err=Sukses Register Silahkan Login');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>
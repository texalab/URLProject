<?php
require_once "conn.php";
$name = mysqli_real_escape_string($conn, $_POST['cname']);
$email = mysqli_real_escape_string($conn, $_POST['cemail']);
$mobile = mysqli_real_escape_string($conn, $_POST['cmno']);
$uname = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['hf']);

if(mysqli_query($conn, "INSERT INTO user_registration(name, emailid, mobileno,username,passkey) VALUES('" . $name . "', '" . $email . "', '" . $mobile."', '". $uname ."', '". $password. "')")) {
echo '1';
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>
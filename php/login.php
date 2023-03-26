<?php
require_once "conn.php";

$uname = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['hf']);

$res=mysqli_query($conn, "select regid,name,emailid,mobileno from user_registration where username='" . $uname . "' and passkey='".$password."'");
$row   = mysqli_fetch_row($res);
echo $regid=$row[0];
$name=$row[1];
$emailid=$row[2];
$mobile=$row[3];

if($res)
{
   header('Location: ../profile.html?regid='.$regid.'&name='.$name.'&email='.$emailid.'&mobile='.$mobile);
} else {
echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
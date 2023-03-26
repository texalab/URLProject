<?php
require_once "conn_mongo.php";
if(isset($_POST['cname'])) $name = $_POST['cname']; else $name="";
if(isset($_POST['cemail'])) $email = $_POST['cemail']; else $email="";
$dob = $_POST['cdob'];
$regid = $_POST['cregid'];
$pan = $_POST['cpan'];

$dbname="mongoguvidb";
$collection="user_registration";

 $user1 = array(
    'regid' => $regid,
    'dob' => $dob,
    'pan' => $pan
);
$single_insert = new MongoDB\Driver\BulkWrite();
$single_insert->insert($user1);
$res=$mongo_conn->executeBulkWrite("$dbname.$collection", $single_insert);
if($res)
   echo "<script>alert('Data Saved Successfully in MongoDB.')</script>";
else
   echo "<script>alert('Could not save data. Contact Admin.')</script>";


$filter = [];
$option = [];

$read = new MongoDB\Driver\Query($filter, $option);

$all_users = $mongo_conn->executeQuery("$dbname.$collection", $read);

echo "<table border=1>";
echo "<tr><td colspan=4>Data Stored in MongoDB</td><tr>";
$slno=1;
echo "<tr><td>Sl. No.</td><th>Registration ID</td><td>Date of Birth</td><td>PAN No.</td></tr>";
foreach ($all_users as $user) {
   echo "<tr><td>$slno</td><td>$user->regid</td><td>$user->dob</td><td>$user->pan</td></tr>";
   $slno++;
}

echo "<tr><td colspan=4><a href='../login.html'>Login</a></td><tr>";
echo "</table>";
?>
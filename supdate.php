<?php
$sid=$_POST['se'];
//echo $id;
$session=$_POST['ses'];
//echo $session;

include("../connection.php");
$query="update tbl_session set session='$session' where sid='$sid'";
mysqli_query($con,$query);
header("location:session.php");

?>
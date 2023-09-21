<?php 
$coid=$_POST['coid'];
//echo $coid;
$complaint=$_POST['complaint'];
//echo $complaint;

include("../connection.php");
$query="update tbl_co_type set complaint_type='$complaint' where coid='$coid'";
mysqli_query($con,$query);
header("location:complaint_type.php");
?>
<?php
$cid=$_POST['cid'];
//echo $cid;
$college=$_POST['col'];
//echo $college;

include("../connection.php");
$query="update tbl_college set college='$college' where cid='$cid'";
mysqli_query($con,$query);
header("location:college.php");

?>
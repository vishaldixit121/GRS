<?php
$id=$_REQUEST['id'];
//echo $id;

include("../connection.php");
$query="delete from tbl_college where cid=$id";
mysqli_query($con,$query);
header("location:college.php");

?>
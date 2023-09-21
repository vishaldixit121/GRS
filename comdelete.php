<?php
$id=$_REQUEST['id'];
//echo $id;
include("../connection.php");
$query="delete from tbl_co_type where coid=$id";
mysqli_query($con,$query);
header("location:complaint_type.php");

?>
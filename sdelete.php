<?php
$id=$_REQUEST['id'];
//echo $id;
include("../connection.php");
$query="delete from tbl_session where sid=$id";
mysqli_query($con,$query);
header("location:session.php");

?>
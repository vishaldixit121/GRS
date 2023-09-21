<?php
$name=$_POST['name'];
//echo $name;
$filename=$_FILES['file']['name'];
//echo $filename;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;

$location="student/";
include("connection.php");
$query="insert into file(name,filename,status,dor) values('$name','$filename','N',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$filename);
header("location:show.php");
?>
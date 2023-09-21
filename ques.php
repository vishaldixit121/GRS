<?php
session_start();
$ques=$_POST['ques'];
//echo $ques; 
include("connection.php");
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid=$row['uid'];
}
$query2="insert into tbl_question(uid,question,date) values('$uid','$ques',curdate())";
mysqli_query($con,$query2);
echo "<script>alert('question added successfully');window.location.href='discuss.php';</script>";

?>
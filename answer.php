<?php
session_start();
$answer=$_POST['ans'];
//echo $answer; 
$qid=$_POST['qid'];
//echo $qid;
include("connection.php");
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid=$row['uid'];
}
$query2="insert into tbl_answer(uid,qid,answer,date) values('$uid','$qid','$answer',curdate())";
mysqli_query($con,$query2);
echo "<script>alert('answer add successfully');window.location.href='discuss.php?qid=$qid';</script>";
?>
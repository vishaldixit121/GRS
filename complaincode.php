<?php
session_start();
$complain=$_POST['complain'];
//echo $complain;
$addcomplain=$_POST['add_complain'];
//echo $addcomplain;
$email=$_SESSION['user'];
include("connection.php");
 $query="select * from tbl_user where email='$email'";
 $res=mysqli_query($con,$query);
 if($row=mysqli_fetch_array($res))
 {
    $uid=$row['uid'];
    
 }
 $query2="insert into tbl_complain(coid,uid,complain,doc,status) values('$complain','$uid','$addcomplain',curdate(),'N')";
 mysqli_query($con,$query2);
 header("location:addcomplain.php");
?>
<?php
session_start();
$email=$_POST['em'];
//echo $email; 
$password=$_POST['pass'];
//echo $password;

include("connection.php");
$query="select * from tbl_user where email='$email' and password='$password' and status='N'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{  
   $_SESSION['user']=$email;
    header("location:user_dashboard.php");
}else{
    echo "<script>alert('Invalid Email id and Password.!!');window.location.href='login.php'</script>";
}

?>
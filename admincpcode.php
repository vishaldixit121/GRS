<?php 
session_start();
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
 $email=$_SESSION['admin'];
include("../connection.php");
$query="select password from tbl_admin where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pp= $row['password'];
}
if($op==$pp){
   if($op==$np){
     // echo "nhi chalega";
      echo "<script>alert('Old password and New password are same');window.location.href='admincpass.php'</script>";
   }
   elseif($np==$cnp){
      // echo "update chalega";
   $query2="update tbl_admin set password='$np' where email='$email'";
   mysqli_query($con,$query2);
   echo"<script>alert('password change SuccessFuly');window.location.href='admin.php'</script>";
   }
   else{
      //echo "nhi hoga";
      echo "<script>alert('New password and Confirm password are not same');window.location.href='admincpass.php'</script>";
   }
}
else{
   echo "<script>alert('Old password and login password are not same');window.location.href='admincpass.php'</script>";
}

?>
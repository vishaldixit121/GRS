<?php
$session=$_POST['ses'];
//echo $session; 
include("../connection.php");
$check="select * from tbl_session where session='$session' ";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    echo "<script>alert('Already added');window.location.href='session.php'</script>";
}
else{
$query="insert into tbl_session(session,status,dor) values('$session','N',curdate())";
mysqli_query($con,$query);
header("location:session.php");
}
?>
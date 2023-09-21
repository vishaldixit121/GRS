<?php
$complaint=$_POST['complaint'];
//echo $complaint;

include("../connection.php");
$check="select * from tbl_co_type where complaint_type='$complaint' ";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    echo "<script>alert('Already added');window.location.href='complaint_type.php'</script>";
}
else{
$query="insert into tbl_co_type(complaint_type,status,dor) values('$complaint','N',curdate())";
mysqli_query($con,$query);
header("location:complaint_type.php");
}
?>
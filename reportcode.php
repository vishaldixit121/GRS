<?php
$ct=$_POST['ct'];

include("../connection.php");
$query="select * from tbl_complain where coid='$ct'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
    echo $row['complain'];

}
?>
<br/>
<input type="button" value="Print" onclick="window.print();"/>
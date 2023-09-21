<?php
$uid=$_POST['id'];
$name=$_POST['name'];
//echo $name; 
$fname=$_POST['fname'];
//echo $fname;
$email=$_POST['em'];
//echo $email;
$gender=$_POST['a'];
//echo $gender;
$mobile=$_POST['mobile'];
//echo $mobile;
$dob=$_POST['date'];
//echo $dob;
$pin=$_POST['pin'];
//echo $pin;
$address=$_POST['add'];
//echo $address;


include("connection.php");
 $query="update tbl_user set name='$name',fname='$fname', gender='$gender',mobile='$mobile',pincode='$pin',address='$address' where uid='$uid'";
mysqli_query($con,$query);

?>
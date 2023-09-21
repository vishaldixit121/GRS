<?php
$name=$_POST['n'];
//echo $name;
$fname=$_POST['f'];
//echo $fname;
$email=$_POST['em'];
//echo $email;
$password=$_POST['pass'];
//echo $password;
$gender=$_POST['g'];
//echo $gender;
$mobile=$_POST['mn'];
//echo $mobile;
$dob=$_POST['d'];
//echo $dob;
$pincode=$_POST['pin'];
//echo $pincode;
$address=$_POST['add'];
//echo $address;
$city=$_POST['ci'];
//echo $city;
$course=$_POST['co'];
//echo $course;
$session=$_POST['se'];
//echo $session;
$college=$_POST['c'];
//echo $college;

include("connection.php");
$check="select * from tbl_user where email='$email' or mobile='$mobile'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    echo "<script>alert('Email and mobile already exist');window.location.href='ragister.php'</script>";
}
else{
$query="insert into tbl_user(name,fname,email,password,gender,mobile,dob,pincode,address,city,course,sid,cid,status,dor)
values('$name','$fname','$email','$password','$gender','$mobile','$dob','$pincode','$address','$city','$course','$session','$college','N',curdate())";
mysqli_query($con,$query);
echo "<script>alert('Registration Successfully');window.location.href='login.php'</script>";
}

?>
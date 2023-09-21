<?php
session_start();
$email=$_SESSION['user'];
include("connection.php");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $uid=$row['uid'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #nav{
            height: 50px;
            width: 97%;
            background-color: greenyellow;
            margin-left: 20px;
            margin-top: 20px;
            border-radius: 10px;
        }
        .c{
         margin: auto;
         margin-left: 10px;
         

        }
        .cc{
         margin: auto;
         margin-left: 10px;
        
        }
        .btn{
    width:170px;
    height:40px;
    background-color:brown;
    margin-top:20px;
   
    color:white;
    font-weight:500;
   }
   .btn:hover{
    width:170px;
    height:40px;
    background-color:lightgreen;
   }
        .gen{
            margin-top:20px;
        }
       
       
    </style>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body style="background-color:rgb(231, 226, 153);">
   <div class="container-fluid">
   <div class="row">
    <div class="col-sm-2  mt-2"style="width:250.9px; background-color:rgb(231, 226, 153);">
        <h3 style="margin-left:5px;  padding-top: 10px; height: 30px;color:rgb(255, 101, 100);"><img src="images/mithila.jpg" height="50px;" width="50px;"style="border-radius:50%;"/> L.N.M.U</h3><br>
        <hr></hr>
           <a href="user_dashboard.php" style="text-decoration:none;color:black;"> <h5 style=" padding-left:10px;"><i class="fa-solid fa-gauge"></i>&nbsp; Dashboard</h5></a>
           
           <hr></hr>
            <a href="updateprofile.php" style="text-decoration:none;"><h6 style="color:black; padding-left:11px;">
                Update Profile</h6></a>
                <hr></hr>
                <a href="addcomplain.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    Add Complaint</h6></a>
                    <hr></hr>
                    <a href="mycomplain.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    My Complaints</h6></a>
                        <hr></hr>
                        <a href="closecomplaind.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                   Close Complaints</h6></a>        
<hr></hr>
<a href="#" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
Discussion Forum</h6></a>
                    <hr></hr>
                    <a href="changepassword.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    Change Password</h6></a>
                    <hr></hr>
                  
                    
                    <a href="userlogout.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    Logout</h6></a>
                   
        </div>
        <div class="col-sm-10 p-0 mt-2"style="width:81.4%;">
            <nav class="navbar navbar-expand-lg"style=" background-color:rgb(231, 226, 153); ">
                <div class="container-fluid">
                 
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-bell"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></a>
                      </li>
                    </ul>
                    <h4 style="margin-right:160px;color:rgb(255, 101, 100);">Lalit Narayana Mithila University, Darbhanga</h4>
                    <span class="navbar-text">
                    <!-- <a href="logout.php"><button style="background-color:rgb(250, 123, 123); color: white; border: none; border-radius: 10px;">Logout</button></a> -->
                    <span style="font-weight:500"><?php   ?><span>
                    <span  style="font-weight:500"><?php $loginDate=date("d/m/y");
                    echo $loginDate; ?><span>
                       <i class="fa-solid fa-gear" style="font-size:20px;"></i>
                   
                     <img src="images/pic.jpg" style="height: 32px; width: 32px; border-radius: 50%;"/>
                    </span>
                  </div>
                </div>
              </nav>
              <nav class="navbar navbar-expand-lg" style=" background-color:rgb(231, 226, 153);box-shadow:1px 1px 2px black;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"style="font-weight:600">Dashboard</a>
                  <a class="navbar-brand" href="#"style="font-weight:600">Update Your Profile Here</a>
                  <a class="navbar-brand" href="#"style="font-weight:600">Dashboard</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                 
                   
                    
                  </div>
               
              </nav>
              <br/>
              <form action="profilecode.php" method="post"style="border:1px solid;height:420px; width:800px; margin-left:100px; border-radius:10px;">
    
    <div class="row p-0 m-0">
        <div class="col-sm-4"style="margin-left:30px; margin-top:10px;">
   
              <input type="hidden" name="id" value="<?php echo $uid;?>"/>
       <label style="font-weight:600; margin-left:10px;">Name</label><br/>
        <input type="text" name="name" value="<?php echo $row['name'];?>" style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>
       
        <label  style="font-weight:600; margin-left:10px;">Email Id</label>
        <input type="text" name="em" value="<?php echo $row['email']; ?>" readonly style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>
       <label style="font-weight:600; margin-left:10px;">Gender</label>
        <span style="font-size:17px;padding:5px;font-weight:600;"><input type="radio" value="male"<?php if( $row['gender']=='Male')
            echo 'checked'; ?>  name="a" class="gen"/>Male
       
       <input type="radio" value="female"<?php if( $row['gender']=='Female')
            echo 'checked'; ?>  name="a"class="gen"/>Female</span>

        <br/>
        <label style="font-weight:600; margin-left:10px; margin-top:10px;">Address</label><br/>
        <textarea name="add" style="width:330px;height:40px;border-radius:8px; border:none;margin-top:5px;text-align:center;padding-top:6px; font-weight:500;"> <?php echo $row['address'];?></textarea><br/>
        <label style="font-weight:600; margin-left:10px;">City</label><br/>
      <input type="text" value="<?php echo $row['city'];?>" name="ci" readonly style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>
    </div>
        <div class="col-sm-4" style="margin-top:10px; margin-left:100px;">
       
        <label style="font-weight:600; margin-left:10px;">Father's Name</label><br/>
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>" style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>

        <label style="font-weight:600; margin-left:10px;">Mobile</label>
         <input type="text" value="<?php echo $row['mobile']; ?>"  name="mobile" style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>

       <label style="font-weight:600; margin-left:10px;">DOB</label><br/>
        <input type="date" name="date" value="<?php echo $row['dob'];?>" readonly style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>

        <label style="font-weight:600; margin-left:10px;">Pincode</label>
        <input type="text" name="pin" value="<?php echo $row['pincode']; ?>" style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>
       
      
        <label style="font-weight:600; margin-left:10px;">Course</label>
        <input type="text" value="<?php echo $row['course'];?>" name="course" readonly  style="width:330px;height:40px;border-radius:8px; border:none;text-align:center;padding-top:6px; font-weight:500;"/><br/>
      
        <span style="margin-left:-120px;"><input type="submit" value="Update" class="btn"/><span>

        </form>    
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row p-0 m-0 mt-4">
   <div class="col-sm-12"style="height:54px; width:100%;  background-color:rgb(212, 206, 123); padding-top:10px; text-align:center;font-weight:600;">
      <span >&copy; copyright Disigned and developed by <span style="font-style:italic">vishal dixit</span></span>
   </div>
</div>
    </body>
</html>
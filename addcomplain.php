<?php
include("connection.php");
$query="select * from tbl_co_type";
$res=mysqli_query($con,$query);
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
        #btn:hover{
            background-color:#55f3a4;
            color:white;
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
                  
                    
                    <a href="" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
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
                  <a class="navbar-brand" href="#"style="font-weight:600">Add Complaints Here</a>
                  <a class="navbar-brand" href="#"style="font-weight:600">Dashboard</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                 
                  </div>
              </nav>
              <!-- nav end -->
             <br/>
              <center><form action="complaincode.php" method="post" style="border:1px solid;height:440px;width:540px; margin-left:30px; border-radius:10px;">
       <label style="margin-left:70px; font-weight:600; font-size:20px; margin-top:10px;"> Complain type</label><br/>
        <select name="complain" style="margin-left:70px;margin-top:10px; height:40px; width:400px;border-radius:10px;">
            <option>--select complain type</option>
            <?php 
            while($row=mysqli_fetch_array($res))
            {
                ?>
            <option value="<?php echo $row['coid']; ?>"><?php echo $row['complaint_type'];?></option>
            <?php 
            }
            ?>
        </select><br/>
       <label style="margin-left:70px;margin-top:10px;font-weight:600;font-size:20px;">Complain</label><br/>
        <textarea name="add_complain" style="margin-left:70px;margin-top:10px;height:200px; width:400px;border-radius:10px;"></textarea><br/>
        <input type="submit" style="margin-left:80px; margin-top:10px;width:170px;height:40px;border-radius:10px; border:none;font-weight:500; font-size:20px; background-color:brown; color:white;" id="btn"/>
        </form>  
          </center>         
        </div>
    </div> 
    </div>  
    </body>
</html>
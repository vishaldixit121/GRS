<?php 
session_start();
$coid=$_REQUEST['id'];
include("../connection.php");
$query="select * from tbl_co_type where coid='$coid'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
if($_SESSION['admin']=="")
{
    session_destroy();
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
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
    </style>
    <script src="../js/bootstrap.bundle.js"></script>
</head>
<body style="background-color:rgb(231, 226, 153);">
   
   <div class="container-fluid">
    <div class="row">
    <div class="col-sm-2  mt-2"style="width:250.9px; background-color:rgb(231, 226, 153);">
        <h3 style="margin-left:5px;  padding-top: 10px; height: 30px;color:rgb(255, 101, 100);"><img src="../images/mithila.jpg" height="50px;" width="50px;"style="border-radius:50%;"/> L.N.M.U</h3><br>
        <hr></hr>
           <a href="dashboard.php" style="text-decoration:none;color:black;"> <h5 style=" padding-left:10px;"><i class="fa-solid fa-gauge"></i>&nbsp; Dashboard</h5></a>
           
           <hr></hr>
            <a href="college.php" style="text-decoration:none;"><h6 style="color:black; padding-left:11px;">
                College Management</h6></a>
                <hr></hr>
                <a href="session.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    Session Management</h6></a>
                    <hr></hr>
                    <a href="complaint_type.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;"> Complaint type mngt.</h6></a>
                        <hr></hr>
                            
                        <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"style=" padding-top:8px;font-weight:500;">
  Complaint Management
      </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Not Processed Yet</a></li>
    <li><a class="dropdown-item" href="#">Pending Complaint</a></li>
    <li><a class="dropdown-item" href="#">Closed Complaint</a></li>
    <li><a class="dropdown-item" href="#">Download Report</a></li>
  </ul>
</div>
<hr></hr>
<a href="#" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    User Management</h6></a>
                    <hr></hr>
                    <a href="#" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    Discussion Forum</h6></a>
                    <hr></hr>
                    <a href="#" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    Change Password</h6></a>
                    <hr></hr>
                    <a href="logout.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 8px;padding-left:11px;">
                    Logout</h6></a>
        </div>
        <div class="col-sm-10 p-0 mt-2"style="width:81.4%;">
            <nav class="navbar navbar-expand-lg"style="background-color:rgb(231, 226, 153);">
       
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
                    <h4 style="margin-right:170px; color:rgb(255, 101, 100);">Lalit Narayana Mithila University, Darbhanga</h4>
                    <span class="navbar-text">
                        <a href="logout.php"style="text-decoretion:none;"><button style="background-color:rgb(250, 123, 123); color: white; border: none; border-radius: 10px;">Logout</button></a>
                     <img src="../images/download.png" style="height: 30px; width: 30px; border-radius: 50%;"/>
                     <img src="../images/pic.jpg" style="height: 30px; width: 30px; border-radius: 50%;"/>
                    </span>
                  </div>
                </div>
              </nav>
              <nav class="navbar navbar-expand-lg mt-1" style="box-shadow:1px 1px 2px black; background-color:rgb(231, 226, 153);">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"style="font-weight:600">Complaint type</a>
                  <a class="navbar-brand" href="#"style="font-weight:600">Complaint type</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                 
                   
                    
                  </div>
               
              </nav>
              <form action="comupdate.php" method="post">
              <div style="border:1px solid; height:210px; width:310px; margin-left:30px; margin-top:20px; border-radius:10px;">
             <label style="margin-top:20px; margin-left:20px; font-weight:600;"> Edit Complaint Type</label><br/>
             <input type="hidden" name="coid" style="border-radius:10px; height:40px; width:250px;" value="<?php echo $row['coid']; ?>"/><br><br/>
             <input type="text" name="complaint" style="border-radius:10px; height:40px; width:250px;" value="<?php echo $row['complaint_type']; ?>"/><br><br/>
             <input type="submit" value="Edit C_type" style="border-radius:10px;width:130px;height:40px; font-weight:600; background-color:brown;color:white;"/>
    </div><br/>
             </form> 
            
                      
        </div>
    </div>
    </div>
   
</body>
</html>
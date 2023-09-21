<?php 
session_start();
$email=$_SESSION['admin'];
include("../connection.php");

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
        th{
          padding:15px;
          text-align:center;
          box-shadow:1px 1px 2px black;
        }
        td{
          padding:10px;
          text-align:center;
          box-shadow:1px 1px 2px black;
        }
        .card-text{
          padding-top:20px;
          
        }
        
    </style>
    <script src="../js/bootstrap.bundle.js"></script>
</head>
<body style="background-color:rgb(231, 226, 153);">
   <div class="container-fluid">
   <div class="row">
    <div class="col-sm-2  mt-0"style="width:250.9px; background-color:rgb(231, 226, 153);">
        <h3 style="margin-left:5px;  padding-top: 10px; height: 30px;color:rgb(255, 101, 100);"><img src="../images/mithila.jpg" height="50px;" width="50px;"style="border-radius:50%;"/> L.N.M.U</h3><br>
        <hr></hr>
           <a href="dashboard.php" style="text-decoration:none;color:black;"> <h5 style=" padding-left:10px;"><i class="fa-solid fa-gauge"></i>&nbsp; Dashboard</h5></a>
           <hr></hr>
          <a href="college.php" style="text-decoration:none;"><h6 style="color:black; padding-left:11px;">
                College Management</h6></a>
                <hr></hr>
                <a href="session.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 6px;padding-left:11px;">
                    Session Management</h6></a>
                    <hr></hr>
                    <a href="complaint_type.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 6px;padding-left:11px;">
                    Complaint type mngt.</h6></a>
 
                        <hr></hr>
                            
                        <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"style=" padding-top:8px;font-weight:500;">
  Complaint Management
      </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="notprocess.php">Not Processed Yet</a></li>
    <li><a class="dropdown-item" href="pc.php">Pending Complaint</a></li>
    <li><a class="dropdown-item" href="cc.php">Closed Complaint</a></li>
    <li><a class="dropdown-item" href="report.php">Download Report</a></li>
  </ul>
</div>
<hr></hr>
<a href="usermanagement.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 6px;padding-left:11px;">
                    User Management</h6></a>
                    <hr></hr>
                    <a href="#" style="text-decoration:none;"><h6 style="color: black; padding-top: 6px;padding-left:11px;">
                    Discussion Forum</h6></a>
                    <hr></hr>
                    <a href="admincpass.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 6px;padding-left:11px;">
                    Change Password</h6></a>
                    <hr></hr>
                    <a href="logout.php" style="text-decoration:none;"><h6 style="color: black; padding-top: 6px;padding-left:11px;">
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
                    <h4 style="margin-right:140px;color:rgb(255, 101, 100);">Lalit Narayana Mithila University, Darbhanga</h4>
                    <span class="navbar-text">
                    <!-- <a href="logout.php"><button style="background-color:rgb(250, 123, 123); color: white; border: none; border-radius: 10px;">Logout</button></a> -->
                    <span style="font-weight:500"><?php echo $email;?><span>
                    <span  style="font-weight:500"><?php $loginDate=date("d/m/y");
                    echo $loginDate; ?><span>
                       <i class="fa-solid fa-gear" style="font-size:20px;"></i>
                   
                     <img src="../images/adminicon.png" style="height: 32px; width: 32px; border-radius: 50%;"/>
                    </span>
                  </div>
                </div>
              </nav>
              <nav class="navbar navbar-expand-lg" style=" background-color:rgb(231, 226, 153);box-shadow:1px 1px 2px black;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"style="font-weight:600">Dashboard</a>
                  <a class="navbar-brand" href="#"style="font-weight:600">Dashboard</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                 
                   
                    
                  </div>
               
              </nav>
             <br/>
               <!-- card start -->
              <div class="row c mt-3" style="background-color:rgb(231, 226, 153);">
                <div class="col-sm-4 ">
                  <div class="card c1">
                  <a href="notprocess.php" style="text-decoration:none;"><div class="card-body"style="height:150px;  background-color:rgb(230, 110, 110);border-radius:10px;">
                      <h5 class="card-title"style="text-align:center;color:white;margin-top:10px;">Not Process Complaint</h5>
                      <center><p class="card-text" style="color:white;">
                        <?php
                        $query="select count(status) from tbl_complain where status='N'";
                        $res=mysqli_query($con,$query);
                        if($row=mysqli_fetch_array($res))
                        {
                          echo $row['count(status)'];
                        } 
                        ?>
                      </p></center>
                     
                    </div>
                  </div></a>
                </div>
                <div class="col-sm-4">
                    <div class="card c2">
                    <a href="pc.php" style="text-decoration:none;"><div class="card-body"style="height:150px;  background-color:rgb(220, 240, 10);border-radius:10px;box-shadow:1px 1px 2px black;">
                        <h5 class="card-title"style="text-align:center;color:white;margin-top:10px;">Pending Complaint</h5>
                        <center><p class="card-text" style="color:white;">
                        <?php
                        $query2="select count(status) from tbl_complain where status='P'";
                        $res2=mysqli_query($con,$query2);
                        if($row2=mysqli_fetch_array($res2))
                        {
                          echo $row2['count(status)'];
                        } 
                        ?>
                        </p></center>
                      
                      </div>
                    </div></a>
                  </div>
                  <div class="col-sm-4">
                    <div class="card c3">
                    <a href="cc.php" style="text-decoration:none;"><div class="card-body"style="height:150px; background-color:rgb(29, 138, 29);border-radius:10px;box-shadow:1px 1px 2px black;">
                        <h5 class="card-title" style="text-align:center;color:white; margin-top:10px;">Close Complaint</h5>
                       <center> <p class="card-text" style="color:white;">
                        <?php
                        $query3="select count(status) from tbl_complain where status='C'";
                        $res3=mysqli_query($con,$query3);
                        if($row3=mysqli_fetch_array($res3))
                        {
                          echo $row3['count(status)'];
                        } 
                        ?>
                        </p></center>
                      
                      </div>
                    </div></a>
                  </div>
                 
                </div>
                 <!-- card end -->
                 <!-- card second -->
                <br/>
                <div class="row c mt-3" style="background-color:rgb(231, 226, 153);">
                <div class="col-sm-4 ">
                  <div class="card c1">
                  <a href="college.php" style="text-decoration:none;"><div class="card-body"style="height:150px;  background-color:rgb(132, 152, 197);border-radius:10px;">
                      <h5 class="card-title"style="text-align:center;color:white;margin-top:10px;">Colleges</h5>
                      <center><p class="card-text" style="color:white;">
                        <?php
                        $query="select count(college) from tbl_college";
                        $res=mysqli_query($con,$query);
                        if($row=mysqli_fetch_array($res))
                        {
                          echo $row['count(college)'];
                        } 
                        ?>
                      </p></center>
                     
                    </div>
                  </div></a>
                </div>
                <div class="col-sm-4">
                    <div class="card c2">
                    <a href="session.php" style="text-decoration:none;"><div class="card-body"style="height:150px;  background-color:rgb(202, 190, 240);border-radius:10px;box-shadow:1px 1px 2px black;">
                        <h5 class="card-title"style="text-align:center;color:white;vmargin-top:10px;">Session</h5>
                        <center><p class="card-text" style="color:white;">
                        <?php
                        $query2="select count(session) from tbl_session";
                        $res2=mysqli_query($con,$query2);
                        if($row2=mysqli_fetch_array($res2))
                        {
                          echo $row2['count(session)'];
                        } 
                        ?>
                        </p></center>
                      
                      </div>
                    </div></a>
                  </div>
                 
                  <div class="col-sm-4">
                    <div class="card c4">
                      <a href="unblock.php" style="text-decoration:none;"><div class="card-body" style="height:150px;  background-color:rgb(219, 60, 10);border-radius:10px;box-shadow:1px 1px 2px black;">
                        <h5 class="card-title"style="text-align:center;color:white;margin-top:10px;">Blocked User</h5>
                        <center><p class="card-text" style="color:white;">
                        <?php
                        $query4="select count(status) from tbl_user where status='Y'";
                        $res4=mysqli_query($con,$query4);
                        if($row4=mysqli_fetch_array($res4))
                        {
                          echo $row4['count(status)'];
                        } 
                        ?>
                        </p></center>
                       
                      </div>
                    </div></a>
                  </div>
                </div>
                  
        </div>
       
    </div>
    </div>
    <div class="row p-0 m-0 mt-0">
   <div class="col-sm-12"style="height:50px; width:100%;  background-color:rgb(212, 206, 123); padding-top:10px; text-align:center;font-weight:600;">
      <span >&copy; copyright Disigned and developed by <span style="font-style:italic">vishal dixit</span></span>
   </div>
</div>
</body>
</html>
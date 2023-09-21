<?php
session_start();
include("../connection.php");

if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:../index.php");
}
$uid=$_REQUEST['id'];
$query="select * from tbl_user where uid='$uid'";

$res=mysqli_query($con,$query); 

?>

<html>
    <head>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .view{
           margin-left:600px;
        }
        body{
            background-color:rgb(231, 226, 153);
        }
        th{
           text-align:center; 
           box-shadow:1px 1px 2px black;
        }
        td{
            text-align:center;
           padding:4px;
           box-shadow:1px 1px 2px black;
        }
        
        </style>
    </head>
    <body>
        <div class="row p-0 m-0" >
    <div class="col-sm-12 p-0 mt-2"style="">
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
                    <span style="font-weight:500"><?php echo "admin@gmail.com"  ?><span>
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
                <h5 class="view">View All  Records</h5>
                 
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                 
                   
                    
                  </div>
               
              </nav>
              <table style="border:1px solid; margin-top:20px; margin-left:1px; box-shadow:1px 1px 2px black;">
        <tr>
            <th>S. No</th>
            <th>Name</th>
            <th>Fname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Pincode</th>
            <th>Address</th>
            <th>City</th>
            <th>Course</th>
            <th>Session</th>
            <th>Status</th>
            <th>College</th>
            <th> Back</th>
     
           
        </tr>
        <?php
            $a=1;
            while($row=mysqli_fetch_array($res))
            { 
            ?>
        <tr>
            <td><?php  echo $a;?></td>
            <td><b><?php echo $row['name']; ?><b></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo "******"; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php $sid=$row['sid']; ?>
          <?php 
          $query2="select * from tbl_session where sid='$sid'";
          $res2=mysqli_query($con,$query2);
          if($row2=mysqli_fetch_array($res2))
          {
            echo $row2['session'];
          }

          ?>
          </td>
          <td><a href="block.php?id=<?php echo $row['uid']; ?>"><?php echo $row['status']; ?></a></td>
            <td><?php  $cid=$row['cid']; ?>
          <?php
          $query3="select * from tbl_college where cid='$cid'";
          $res3=mysqli_query($con,$query3);
          if($row3=mysqli_fetch_array($res3))
          {
            echo $row3['college'];
          }
          ?>
          </td>
         
           <td><a href="usermanagement.php">back</a></td>
           
           
        </tr>
        <?php
        $a++;
            }
            ?>
            
    </table>   
 </div>
 
</div>
    </body>
    </html>
<?php 
?>

<!DOCTYPE html>
<html>
<head>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
   crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="js/bootstrap.bundle.js"></script>
   <style>
      #outer{
         /* background-image:url(images/img1.jpg);
         background-size:cover; */
      }
      .log-card{
         height:175px;
         width:100%;
         box-shadow:0px 0px 5px black;
         background-color: rgb(216, 212, 157);
         border-radius:10px;
      }
      .log-card:hover{
         height:175px;
         width:100%;
         background-color: rgb(196, 189, 102);
         box-shadow:5px 5px 15px black;
      }
      a{
         text-decoration:none;
         
      }
   </style>
</head>
<body><div id="outer" class="container-fluid bg-body-tertiary">
   <div class="row">
      <div class="col-sm-12 ps-0" style="height:48px;background-color: rgb(209, 199, 65);color:white;padding:10px; font-size:20px;">
         <span style="padding-left:20px;"><i class="bi bi-github"></i> <i class="bi bi-linkedin"></i> <i class="bi bi-facebook"></i>
         <i class="bi bi-twitter"></i></span><span style="padding-left:750px;"><i class="bi bi-telephone-fill">+91 9876543210</i> | <i class="bi bi-envelope-at"> Email Id: vishaldixit@gmail.com</i></span>
      </div>
   </div>
<h1 align="center"><img src="images/mithila.jpg" width="150px" height="150px" style="border-radius:50%; margin-top:20px;"/></h1>
<h2 align="center" style="font-weight:600px;color:rgb(209, 199, 65); ">Lalit Narayana Mithila University, Darbhanga</h2>
<h3 align="center" style="font-weight:600px;">Grievance Redressal Portal</h3>

<div class="row">
   <div class="col-sm-4 p-5">
      <div class="log-card"  style="font-size:60px; text-align:center;padding-top:30px;">
      <a href="admin/admin.php"><i class="fa-solid fa-user" style="color:black;"></i>
      <span style="font-size:20px; padding-bottom:20px; font-weight:600;color:white;">Admin Login</span></a>
      </div>
   </div>
   
   <div class="col-sm-4 p-5">
   <div class="log-card" style="font-size:60px; text-align:center;padding-top:30px;">
   <a href="ragister.php"><i class="fa-solid fa-users"style="color:black;"></i>
   <span style="font-size:20px; padding-bottom:20px; font-weight:600;color:white;">Users Registration</span></a>
   </div>
   </div>
   
   <div class="col-sm-4 p-5">
   <div class="log-card" style="font-size:60px; text-align:center;padding-top:30px;">
  <a href="login.php"> <i class="fa-solid fa-graduation-cap"style="color:black;"></i>
   <span style="font-size:20px; padding-bottom:20px; font-weight:600;color:white;">Student Login</span></a>
   </div>
   </div>
</div>
</div>
<div class="row p-0 m-0 mt-3">
   <div class="col-sm-12"style="height:50px; width:100%;  background-color:rgb(212, 206, 123); padding-top:10px; text-align:center;font-weight:600;">
      <span >&copy; copyright Disigned and developed by <span style="font-style:italic">vishal dixit</span></span>
   </div>
</div>
    
</body>
</html>
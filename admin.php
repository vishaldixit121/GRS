<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="../js/bootstrap.bundle.js"></script>
   <style>
   .ep{
    height:40px;
    width:380px;
    border-radius:10px;
    margin-left:150px;
   }
   label{
   margin-left:150px;
   padding:8px;
   }
   .btn{
    width:170px;
    height:40px;
    background-color:brown;
    margin-top:10px;
    margin-left:280px;
    color:white;
    font-weight:500;
   }
   .btn:hover{
    width:170px;
    height:40px;
    background-color:lightgreen;
   }
   .outer{
 border:1px solid;
 border-radius:10px;
 box-shadow:2px 2px 5px black;
 border:none;
 
   }
  input,placeholder{
    text-align:center;
  } 
  
   
   </style>
</head>
<body style="background-color:#f3f2be;">
    <div class="container-fluid">
    <h1 align="center"><img src="../images/mithila.jpg" width="130px" height="130px" style="border-radius:50%"/></h1>
<h3 align="center" style="font-weight:600px;color:rgb(209, 199, 65);; ">Lalit Narayana Mithila University, Darbhanga</h3>
<h4 align="center" style="font-weight:600px; ">Grievance Redressal Portal</h4>
        <div class="row">
            <div class="col-sm-5">
             <img src="../images/c2.jpg" height="100%" width="100%" style="border-radius:10px; "/>
            </div>
            <div class="col-sm-7 outer">
             
            <center><h2 class="fw-bold mb-1 text-uppercase mt-1">Admin Login</h2>
              <p class="" style="font-weight:600;">Please enter your email and password!</p></center>
              <form action="acode.php" method="post">
                <label style="font-weight:600;">Email Id</label><br/>
                <input type="email" placeholder="Enter Email Id *"class="ep" name="em"/><br/>
                <label style="font-weight:600;">Password</label><br/>
                <input type="Password" placeholder="Enter Password *" class="ep" name="pass"/>
                <br/>
                <a href="#" style="font-weight:500; margin-left:150px;">forget password</a><br/>
                <input type="submit" value="Login"class="btn"/><br/><br/>
</form>
           
</div>
        </div>
   
</div>
</body>
</html>




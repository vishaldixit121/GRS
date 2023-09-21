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
    margin-left:10px;
   }
   label{
   text-align:center;
   padding:8px;
   }
   .btn{
    width:170px;
    height:40px;
    background-color:brown;
    margin-top:30px;
    margin-left:40px;
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
<h3 align="center" style="font-weight:600px;color:rgb(209, 199, 65); ">Lalit Narayana Mithila University, Darbhanga</h3>
<h4 align="center" style="font-weight:600px; ">Grievance Redressal Portal</h4>
        <div class="row">
            <div class="col-sm-5">
             <img src="../images/c2.jpg" height="100%" width="100%" style="border-radius:10px; "/>
            </div>
            <div class="col-sm-7 outer">
             
            <center><h4 class="fw-bold mb-1 text-uppercase mt-3">Please change your password!</h4>
             
              <form action="admincpcode.php" method="post">
                <label style="font-weight:600;">Old Password</label><br/>
                <input type="text" placeholder="Enter Old Password *"class="ep" name="op"/><br/>
                <label style="font-weight:600;">New Password</label><br/>
                <input type="text" placeholder="New Password *" class="ep" name="np"/>
                <br/>
                <label style="font-weight:600;">Confirm Password</label><br/>
                <input type="text" placeholder="Confirm Password *" class="ep" name="cnp"/>
                <br/>
               
                <input type="submit" value="Change"class="btn"/><br/><br/>
               
</form>
</div>
        </div>
   
    </div>
</body>
</html>



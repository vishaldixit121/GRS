<?php 
include("connection.php");
$query="select * from tbl_session";
$cquery="select * from tbl_college";
$res=mysqli_query($con,$query);
$cres=mysqli_query($con,$cquery);
?>

<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="css/bootstrap.css" rel="stylesheet"/>
    <style>
        .register {
            background: -webkit-linear-gradient(left, #be7e36, #dbda82);
            margin-top: 1%;
            padding: 3%;
            border-radius: 10px;
            
          
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 20%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

     

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 8%;
        }

        .btnRegister {
            float: right;
            margin-top: 5%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #be4a36;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #be4a36;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        label {
            font-size: 14px;
            color: #be4a36;
            font-weight: 500;
        }
    </style>
</head>

<body style="background-color:#f3f2be;">
   
       
        <h1 align="center"><img src="images/mithila.jpg" width="150px" height="150px" style="border-radius:50%"/></h1>
<h2 align="center" style="font-weight:600px;color:rgb(209, 199, 65); ">Lalit Narayana Mithila University, Darbhanga</h2>
<h3 align="center" style="font-weight:600px; ">Grievance Redressal Portal</h3>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left ">
                    <img src="images/mithila.jpg"
                        style="border-radius:50%;" alt="" />
                    <h3>Welcome</h3>
                    <p style="font-weight: 400;"><strong>Grievance Redressal Portal.</strong> <br>Have already an account?<a href="login.php"style="font-weight:600;color:darkblue;">Login Here</a></p>
                    <a href="index.php" style="color:darkblue;"><i class="bi bi-box-arrow-in-left text-danger"></i> Back to Home</a>
                   
                </div>
                <div class="col-md-9 register-right ">

                    <div class="tab-content" id="">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Student Registration</h3>
                            <form action="rcode.php" method="POST">
                            <div class="row register-form">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label>Student Name</label>
                                        <input type="text" class="form-control" placeholder="Student Name *" value=""
                                            name="n" />
    </div>
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <input type="email" class="form-control" placeholder="Enter Email Id *" value=""
                                            name="em" />
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="g">
                                            <option class="hidden" selected disabled>--Select Gender--</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control" placeholder="Date Of Birth *" value=""
                                            name="d" placeholder="DOB" />
                                    </div>
                                    <div class="form-group">
                                        <label style="margin-top: -20px;">Address</label>
                                       <textarea style="width:300px; height: 40px; border-radius: 4px;" name="add">Address</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Course</label>
                                        <select class="select2 form-control" name="co" id="branch" required>
                                            <option class="hidden" selected disabled>--Select course--</option>
                                            <option >B.Sc</option>
                                            <option >B.A.</option>
                                            <option >B.Com</option>
                                            <option >M.Sc</option>
                                            <option >M.A</option>
                                            <option >M.Com</option>
                                            <option >MBA</option>
                                            <option >PHD</option>
                                           
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>College</label>
                                        <select class="form-control select2" name="c">
                                        <option class="hidden" selected disabled>--Select College--</option>
                                           <?php 
                                           while($crow=mysqli_fetch_array($cres))
                                           {
                                            ?>
                                           
                                            <option value="<?php echo $crow['cid']; ?>"><?php echo $crow['college'];?></option>
                                            <?php 
                                           }
                                           ?>
                                           
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <input type="text" class="form-control" placeholder="Father Name *" value=""
                                            name="f" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password *" value=""
                                            name="pass" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No.</label>
                                        <input type="number" class="form-control" placeholder="Mobile No *" value=""
                                            name="mn" />
                                    </div>
                                    <div class="form-group">
                                        <label>Pincode.</label>
                                        <input type="number" class="form-control" placeholder="Pincode *" value=""
                                            name="pin" />
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control select2" name="ci">
                                            <option class="hidden" selected disabled>--Select City--</option>
                                            <option >Darbhanga</option>
                                            <option >Muzaffarpur</option>
                                            <option >Samastipur</option>
                                            <option >Madhubani</option>
                                           
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Session</label>
                                      
                                        <select class="form-control select2" name="se">
                                        <option class="hidden" selected disabled>--Select session--</option>
                                        <?php
                                            while($row=mysqli_fetch_array($res))
                                            {
                                            ?>
                                           <option value="<?php echo $row['sid']; ?>"><?php echo $row['session'];?></option>
                                            <?php
                                            }
                                            ?>
                                           
                                           
                                        </select>
                                    </div>


                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </form>
    <<div class="row p-0 m-0 mt-3">
   <div class="col-sm-12"style="height:50px; width:100%;  background-color:rgb(212, 206, 123); padding-top:10px; text-align:center;font-weight:600;">
      <span >&copy; copyright Disigned and developed by <span style="font-style:italic">vishal dixit</span></span>
   </div>
</div>
</body>

</html>
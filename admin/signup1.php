<?php
session_start();
if(isset($_SESSION["login1"]))
	header("location:dashboard.php");

?><!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login/Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="" sizes="16x16" href="">
    <link href="css/style.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="h-100"  style="background-image: url(images/admincar.jpg); background-position: center;
            background-repeat: no-repeat;
            background-size: cover;" >
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Admin Panel</h4>
                                    <h5 style="text-align:center">Register your account</h5>
                                    <?php session_start();
                                    
                                           
                                            if(isset($_SESSION['useradded'])){
                                              echo'<div class="alert alert-success" role="alert">'.$_SESSION['useradded'].'</div>';   
                                            }elseif(isset($_SESSION['Password Does not Matched'])){
                                    
                                                echo'<div class="alert alert-warning" role="alert">'.$_SESSION['Password Does not Matched'].'</div>';
                                            }
                                    
                                    
                                    
                                    ?>
                                    <form action="Recovery_Email.php" method="post"  autocomplete="off">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>User Name</strong></label>
                                            <input type="text" class="form-control"  name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Levels</strong></label><br>
                                            
                                             <label class="radio-inline"> <input type="radio" name="status" value="CEO Level" checked>&nbsp; CEO &nbsp;&nbsp; </label>
                                            <label class="radio-inline"> <input type="radio" name="status" value= "Management Level"> Managerial &nbsp;&nbsp;</label>
                                            <label class="radio-inline"><input type="radio" name="status" value= "Sale Level"> Sales </label>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" class="form-control" name="cpassword" required>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-primary btn-block" name="signup">Sign up</button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                            <a href="index.php"><button class="btn btn-outline-primary btn-block mt-3">Sign In</button></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>

</body>
</html>
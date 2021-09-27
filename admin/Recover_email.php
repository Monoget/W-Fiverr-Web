<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login/Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="" sizes="16x16" href="">
    <link href="css/style.css" rel="stylesheet">

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
                                    <h4 class="text-center mb-4">Recover your account</h4>
                                    
                                    <form action="Recovery_Email.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email:</strong></label>
                                            <input type="text" class="form-control" value="hello@example.com" name="email">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="Recovery_Email">Sign in</button>
                                        </div>
                                    </form>
                                    
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
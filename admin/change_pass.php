<?php
   include("sessions.php");
   include("header.php");
   include("sidebar.php");

   $status=NULL;

   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Setting</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Setting Panel</h4>
                            </div>
                        <div class="card-body">
                        <div class="row">
						<div class="col-md-2 col-xs-4"></div>
						<div class="col-md-8 col-xs-4">
							<h1 style="text-align:center">Change Password</h1>
						</div>
						<div class="col-md-2 col-xs-4"></div>
					</div>
					<br><br>
					<form action="action.php" method="post">
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
				             <input type="password" class="form-control" required placeholder="Enter Current Password" name="cpass">
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
							<input type="password" class="form-control" required placeholder="Enter New Password" name="npass">	
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
                            <input type="password" class="form-control" required placeholder="Confirm New Password" name="npass_confirm"></div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
                        <br><br>
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-1">
				             <button class="btn btn-outline-success btn-icon-split btn-rounded" name="change_pass" style="margin-left: -45px;">
				             <span class="text">Change</span></button>   
							</div>
							<div class="col-md-1">
								<a href="dashboard.php" class="btn btn-outline-warning btn-icon-split btn-rounded"><span class="text">Back</span></a>
							       </div>
						         </div>
					          </form>
                            </div>
                        </div>
					</div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
<?php
include ("footer.php");
?>

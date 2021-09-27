<?php
    include("sessions.php");
    include("header.php");
    include("sidebar.php");

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
                                <div class="col-md-10">
                                <h4 class="card-title">Setting Panel</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="updateuser.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">+ See User</button></a> 
                                    </div>
                                    
                                </div>
                            </div>
                        <div class="card-body">
                        <div class="row">
						<div class="col-md-2 col-xs-4"></div>
						<div class="col-md-8 col-xs-4">
							<h1 style="text-align:center">Create User</h1>
						</div>
						<div class="col-md-2 col-xs-4"></div>
					</div>
					<br><br>
					<form action="action.php" method="post">
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
				             <input type="text" class="form-control" required placeholder="Enter User Name" name="un" required>
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
				             <input type="email" class="form-control" required placeholder="Enter Email " name="email" required>
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
						 <select name="status" class="c-form-profession form-control" id="c-form-profession" required>
                            <option value="Sale Level">Sale Level</option>
                            <option value="Management Level">Mangement Level</option>
                            <option value="CEO Level">CEO Level</option>
                        </select>
                        </div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div><br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
							<input type="password" class="form-control" required placeholder="Enter Password" name="pass" required>	
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-5"></div>
							    <div class="row">
    							<div class="col-md-5">
    				             <button class="btn btn-outline-success btn-icon-split btn-rounded" name="create_user" style="margin-left: -45px;">
    				             <span class="text" name="create_user">Add</span></button>   
    							</div>
    							<div class="col-md-5">
    								<a href="settings_panel.php" class="btn btn-outline-warning btn-icon-split btn-rounded"><span class="text">Back</span></a>
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

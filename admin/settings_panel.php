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
                       <?php
                       if($status==1)
                       {
                        ?>
                <p style="color:green;">Section Updated.</p>
                 <?php 
                   }
                   elseif($status==2)
                   {
                   ?>
              <p style="color:red;">Error! Section Not Updated.</p>
                <?php
                 } 
                ?>
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
                                <div class="col-xl-4 col-md-4 col-xs-4"></div>
                                <div class="col-xl-12 col-md-12 col-xs-4">
                                <h3 style="text-align:center"> <a class="black" href="createuser.php">1. Create User</a></h3>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="col-xl-12 col-md-12 col-xs-4">
                                <h3 style="text-align:center"> <a class="black" href="updateuser.php">2. See User</a></h3>
                                </div>
                                <div class="col-xl-4 col-md-4 col-xs-4"></div>   
                               </div> 
                                <br>
                                <br>
                                <div class="col-xl-12 col-md-12 col-xs-4">
                                <h3 style="text-align:center"> <a class="black" href="change_pass.php">3. Change Password</a></h3>
                                </div>
                                <div class="col-xl-4 col-md-4 col-xs-4"></div>   
                               </div>                           
                              <br><br> 
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
